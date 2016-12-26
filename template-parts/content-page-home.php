<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="entry-content">


    <?php

    $temp     = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();

    $wp_query->query('showposts=-1&post_type=galeria&page_id=140');

    while ($wp_query->have_posts()) : $wp_query->the_post();

    $images = rwmb_meta( 'embutidos_imgadv', 'type=image&size=full' );
    echo "\n<div class=\"c-carousel\">";
    foreach ( $images as $image ) {
      echo "\n<div><img src='{$image['url']}' alt='{$image['alt']}' /></div>";
    }
    echo "\n</div>";

    endwhile; ?>
    <?php $wp_query = null; $wp_query = $temp; ?>

		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
