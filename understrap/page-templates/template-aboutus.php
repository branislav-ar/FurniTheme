<?php
/**
 * Template Name: Template About Us
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
						<h1>Who are we?</h1>
					</div>
					<p class="mb-4">
					At Furni, we bring over 10 years of experience in creating furniture that combines quality, 
					style, and comfort. Our journey has been shaped by a passion for craftsmanship and a commitment to 
					transforming homes with timeless designs. Each piece we create is a reflection of our expertise, 
					designed to elevate your living space while providing the comfort you deserve.
					 Discover furniture that’s built to last, backed by a legacy of excellence.
					</p>
					<p>
						<a href="/home#shop-now-SCROLL" class="btn btn-secondary me-2">Shop now</a>
						<a 
						onclick="document.getElementById('why-is-explore-SCROLL').scrollIntoView({ behavior: 'smooth' })"
						class="btn btn-white-outline">Explore</a>
					</p>
				</div>
		</div><!-- .row -->
	</div><!-- #container -->
</div>
<!-- Hero SECTION END -->
<!-- Why choose us SECTION START -->
<div class="why-choose-section" id="why-is-explore-SCROLL">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6">
				<h2 class="section-title">Why choose us?</h2>
				<p>
				Choose us for fast shipping, a flexible return policy, and round-the-clock customer support. We’re committed to making your shopping experience smooth and enjoyable, from browsing to delivery. With our easy-to-shop platform and dedicated service, we ensure satisfaction at every step.
				</p>
				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/truck.svg" alt="ship" class="imf-fluid">
							</div>
							<h3>Fast & Free Shipping</h3>
							<p>Experience fast and reliable shipping, completely free, ensuring your order arrives swiftly and stress-free right to your doorstep!</p>
						</div>
					</div>
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/bag.svg" alt="shop" class="imf-fluid">
							</div>
							<h3>Easy To Shop</h3>
							<p>Shop with ease using our intuitive platform, designed for a smooth and effortless experience.</p>
						</div>
					</div>
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/support.svg" alt="" class="imf-fluid">
							</div>
							<h3>24/7 Support</h3>
							<p>Get round-the-clock support whenever you need it, with our team always ready to assist.</p>
						</div>
					</div>
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/return.svg" alt="" class="imf-fluid">
							</div>
							<h3>Hassle Free Return</h3>
							<p>Enjoy a smooth and easy return process if needed, designed to make returns stress-free.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/why-choose-us-img.jpg" alt="why-choose-us" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Why choose us SECTION END -->



<?php
get_footer();