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
            <span class="site-info-phone">02656.479.268</span>
            <a href="mailto:info@lamercedembutidos.com.ar">info@lamercedembutidos.com.ar</a>
        </div>
		<div class="site-info">
			&copy; Copyright <?php echo date('Y'); ?>. Todos los derechos reservados. <?php bloginfo( 'name' ); ?> <?php $description = get_bloginfo( 'description', 'display' ); echo $description; ?>.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
