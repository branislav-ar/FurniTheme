<?php
/**
 * Template Name: Template Home
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
<div class="hero">
	<div class="container">
		<div class="row">
			<div class="left col-lg-5">
				<div class="intro">
					<div class="h-div">
						<h1>Where Style</h1>
						<h1>Meets Comfort.</h1>
					</div>
					<p class="mb-4">
					Welcome to Furni – where style meets ultimate comfort!
					Elevate your space with our bold, beautifully crafted
					furniture designed to make a statement. Discover the perfect
					blend of luxury and coziness that transforms your home into a masterpiece!
					</p>
					<p>
						<a href="#" class="btn btn-secondary me-2"
						onclick="document.getElementById('shop-now-SCROLL').scrollIntoView({ behavior: 'smooth' })"
						>Shop now</a>
						<a href="#" class="btn btn-white-outline"
						onclick="document.getElementById('explore-SCROLL').scrollIntoView({ behavior: 'smooth' })"
						>Explore</a>
					</p>
				</div>
			</div>
			<div class="right col-lg-7">
				<div class="hero-img">
					<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/couch.png" alt="Couch" class="img-fluid">
				</div>
			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->
</div> <!-- .row -->
<!-- Hero SECTION END -->

<!-- We hlep you SECTION START -->
 <div class="we-help-section" id="explore-SCROLL">
	<div class="container">
		<div class="row justify-content-between">

			<div class="col-lg-7 mb-5 mb-lg-0">
				<div class="imgs-grid">
					<div class="grid grid-1">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/img-grid-1.jpg" alt="img1">
					</div>
					<div class="grid grid-2">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/img-grid-2.jpg" alt="img2">
					</div>
					<div class="grid grid-3">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/img-grid-3.jpg" alt="img3">
					</div>
				</div>
			</div>

			<div class="col-lg-5 ps-lg-5">
				<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
				<p>
				At Furni., we specialize in creating stunning modern interiors that reflect your style. Our expert team provides inspiration and resources to transform your space, from choosing color palettes to selecting contemporary furniture.
				</p>
				<ul class="list-unstyled custom-list my-4">
					<li>
						Discover the latest design trends
					</li>
					<li>
						Access tips to maximize functionality
					</li>
					<li>
						Explore our curated collection of stylish decor
					</li>
					<li>
						Find inspiration through our design blog
					</li>
				</ul>
				<p>
					<a class="btn" 
					onclick="document.getElementById('read-more-SCROLL').scrollIntoView({ behavior: 'smooth' })"
					>Read more</a>
				</p>
			</div>

		</div>
	</div>
 </div>
<!-- We hlep you SECTION END -->

<!-- Crafter With Excelent Mat SECTION START -->
<div class="product-section" id="shop-now-SCROLL">
	<div class="container">
		<div class="row">
			<!-- col 1 start -->
			<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
				<h2 class="mb-4 section-title">
					Crafted with excellent materials.
				</h2>
				<p class="mb-4">
					We present a premier salon and furniture shop, offering meticulously crafted pieces made from high-quality materials. Each item is designed to enhance your living space with both style and durability. 
				</p>
				<p>
					<a href="#" class="btn">Shop now</a>
				</p>
			</div>
			<!-- col 1 end -->
			<!-- col 2 start -->
			<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
				<a href="" class="product-item">
					<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/product-1.png" alt="Nordic-Chair" class="img-fluid product-thumbnail">
					<h3 class="product-title">Nordic Chair</h3>
					<strong class="product-price">$50.00</strong>
					<span class="icon-cross">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/cross.svg" alt="cross-icon" class="img-fluid">
					</span>
				</a>
			</div>
			<!-- col 2 end -->
			<!-- col 3 start -->
			<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a href="" class="product-item">
					<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/product-2.png" alt="Nordic-Chair" class="img-fluid product-thumbnail">
					<h3 class="product-title">Kruzo Aero Chair</h3>
					<strong class="product-price">$78.00</strong>
					<span class="icon-cross">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/cross.svg" alt="cross-icon" class="img-fluid">
					</span>
				</a>
			</div>
			<!-- col 3 end -->
			<!-- col 4 start -->
			<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
			<a href="" class="product-item">
					<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/product-3.png" alt="Nordic-Chair" class="img-fluid product-thumbnail">
					<h3 class="product-title">Ergonomic Chair</h3>
					<strong class="product-price">$43.00</strong>
					<span class="icon-cross">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/cross.svg" alt="cross-icon" class="img-fluid">
					</span>
				</a>
			</div>
			<!-- col 4 end -->
		</div>
	</div>
</div>
<!-- Crafter With Excelent Mat SECTION END -->


<!-- Recent Blog Posts SECTION START -->
<div class="blog-section" id="read-more-SCROLL">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-6">
				<h2 class="section-title">Recent Blog Posts</h2>
			</div>
			<div class="col-md-6 text-start text-md-end">
				<a href="#" class="more">View All Posts</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="#" class="post-thumbnail">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/post-1.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="post-content-entry">
						<h3><a href="#">First Time Home Owner Ideas</a></h3>
						<div class="meta">
							<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="#" class="post-thumbnail">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/post-2.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="post-content-entry">
						<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
						<div class="meta">
							<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
				<div class="post-entry">
					<a href="#" class="post-thumbnail">
						<img src="<?php echo get_template_directory_uri(); ?>/src/imgs/post-3.jpg" alt="Image" class="img-fluid">
					</a>
					<div class="post-content-entry">
						<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
						<div class="meta">
							<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- Recent Blog Posts SECTION END -->

<?php
get_footer();
