<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
<!-- <svg class="icon icon-spinner animate-spin"><use xlink:href="#icon-spinner"></use></svg> -->
		<?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
