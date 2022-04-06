<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
		<div class="home-trail-title">
			<h2>Trail Features</h2>
		</div>
		<div class="home-trail-features">
			<div class="home-trail-box">
					<img class="home-trail-img" src="<?php the_field('trail_features_img')?>" />
				<div class="home-trail-text">
					<?php the_field('trail_features_text')?>
				</div>
			</div>
		</div>
		<div class="home-trail-video">
			<h2>Videos From The Trail</h2>
		</div>
		<div class="home-video">
			<div class="home-video-content">
				<div class="home-video-text">
					<?php the_field('video_feature_text')?>
				</div>
				<div class="home-video-video">
					<?php the_field('video_feature')?>
				</div>
			</div>
		</div>
	</div><!-- #primary -->
<?php
get_footer();
