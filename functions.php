<?php
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro:400,700', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
 ?>
<?php
 add_action( 'get_header', 'remove_storefront_sidebar' );
function remove_storefront_sidebar() {
	if ( is_woocommerce() ) {
		remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}
}
?>
