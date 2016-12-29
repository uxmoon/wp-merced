<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La_Merced
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info-contact">
      <div class="site-info-contact__content">
        <span class="site-info-phone"><svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg> 02656.479.268</span>
        <a href="mailto:info@lamercedembutidos.com.ar"><svg class="icon icon-envelope"><use xlink:href="#icon-envelope"></use></svg> info@lamercedembutidos.com.ar</a>
      </div>
    </div>
		<div class="site-info">
			&copy; Copyright <?php echo date('Y'); ?>. Todos los derechos reservados. <?php bloginfo( 'name' ); ?> &#8211; <?php $description = get_bloginfo( 'description', 'display' ); echo $description; ?>.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
