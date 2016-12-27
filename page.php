<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package La_Merced
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

        if ( is_page( array( 6, 89 )  ) ) {

          get_template_part( 'template-parts/content', 'page-home' );

        } elseif ( is_page( array( 8, 7 ) ) ) {

          get_template_part( 'template-parts/content', 'page-products' );

        } elseif ( is_page( array( 10, 23 ) ) ) {

          get_template_part( 'template-parts/content', 'page-store' );

        } elseif ( is_page( array( 12, 25 ) ) ) {

          get_template_part( 'template-parts/content', 'page-location' );

        } else {

          get_template_part( 'template-parts/content', 'page' );

        }


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
