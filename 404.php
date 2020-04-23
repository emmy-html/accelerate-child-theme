<?php
/**
 * The template for displaying broken pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<section class="error-content">
				<article class="error-image">
					<img src="http://localhost:8888/accelerate/wp-content/uploads/2020/04/404.png" alt="404" />
				</article>
				<article class="error-text">
					<h1>Whoops, Took A Wrong Turn...</h1>
					<p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
					<p>Feel free to take a look around our <a href="/accelerate/blog">blog</a> or some of our featured <a href="/accelerate/case-studies">work.</a></p>
				</article>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
