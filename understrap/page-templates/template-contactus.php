<?php
/**
 * Template Name: Template Contact Us
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}?>

<!-- Hero SECTION START -->
<div class="hero ">
	<div class="container">
		<div class="row">
				<div class="intro">
					<div class="h-div">
						<h1>Let's connect!</h1>
					</div>
					<p class="mb-4">
					At Furni, we make it easier than ever to get in touch with us. Whether you have questions, need assistance, or simply want to learn more about our products, our friendly team is here for you 24/7. We’re just a click or call away, committed to providing fast and reliable support whenever you need it. Reach out and experience the ease of seamless communication with us—because your satisfaction is our priority!
					</p>
					<p>
						<a href="/home#shop-now-SCROLL" class="btn btn-secondary me-2">Shop now</a>
						<a onclick="document.getElementById('footer-SCROLL').scrollIntoView({ behavior: 'smooth' })" class="btn btn-white-outline">Contact us</a>
					</p>
				</div>
		</div><!-- .row -->
	</div><!-- #container -->
</div>
<!-- Hero SECTION END -->

<?php
get_footer();