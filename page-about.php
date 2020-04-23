<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays the about page.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="about-features">
		<div class="site-content">
			<div class="features-intro">
				<h4>Our Services</h4>
				<p>We take pride in our clients and the content we create for them.
	Here’s a brief overview of our offered services.</p>
			</div>

					<?php query_posts('posts_per_page=4&post_type=about_services&order=ASC'); ?>
					<?php while ( have_posts() ) : the_post();
							$service_name = get_field("service_name");
							$service_description = get_field("service_description");
							$image = get_field("image");
							$size = "medium";
					 ?>

					 <article class="features-container">
						 <aside class="features-image">
							 <?php echo wp_get_attachment_image( $image, $size ); ?>
						 </aside>

						 <aside class="features-description">
							 <h3><?php echo $service_name; ?></h3>
							 <p><?php echo $service_description; ?></p>
						 </aside>
					 </article>
				 <?php endwhile; ?>
		</div>
	</section>


<?php get_footer(); ?>
