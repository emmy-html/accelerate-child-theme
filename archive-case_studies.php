<?php
/**
 * The template for displaying case study archive.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">

      <?php while ( have_posts() ) : the_post();
          $services = get_field('services');
          $client = get_field('client');
          $link = get_field('site_link');
          $image_1 = get_field('image_1');
          $image_2 = get_field('image_2');
          $image_3 = get_field('image_3');
          $size = "full";
      ?>

      <article class="case-study">
          <aside class="case-study-sidebar">
              <h2><?php the_title(); ?></h2>
              <h4><?php echo $services; ?></h4>

              <p class="case-study-description"><?php the_excerpt(); ?></p>
              <p class="read-more-link"><a href="<?php the_permalink(); ?>">Visit Project &rsaquo;</a></p>
          </aside>
          <aside class="case-study-images">
              <a href="<?php the_permalink(); ?>"><?php if($image_1) {
                  echo wp_get_attachment_image( $image_1, $size );
              } ?></a>
            </aside>
          </article>
          <?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
