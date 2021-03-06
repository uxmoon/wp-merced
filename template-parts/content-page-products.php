<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->

  <div class="entry-content">

    <?php

    // IDs for each gallery
    $myArray = array('38','79','80');

    $args = array (
      'posts_per_page' => -1,
      'post_type'      => galeria,
      'post__in'       => $myArray
    );

    query_posts( $args );

    if ( have_posts() ):
      while ( have_posts() ) :
        the_post(); ?>

    <div class="c-products">
      <div class="c-products__content">
        <?php the_title('<h2 class="c-products__title">', '</h2>'); ?>

        <?php the_content(); ?>
      </div>
      <div class="c-products__image">
        <?php
            // Do stuff with the post content.
            $images = rwmb_meta( 'embutidos_imgadv', 'type=image&size=full' );

            echo "\n<div class=\"c-carousel-wrapper\"><div class=\"c-carousel\">";

            foreach ( $images as $image ) {

              $sizes = wp_calculate_image_sizes( array( $image['width'], $image['height'] ), null, null, $image['ID'] );

              echo "\n<div><img src=\"{$image['url']}\" alt=\"{$image['alt']}\" srcset=\"{$image['srcset']}\" sizes=\"{$sizes}\" /></div>";
            }

            echo "\n</div></div>";
        ?>
      </div><!-- .c-products__image -->
    </div>

    <?php
      endwhile;
    else:
        // Insert any content or load a template for no posts found.
    endif;

    wp_reset_query(); ?>


  </div><!-- .entry-content -->

</article><!-- #post-## -->
