<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package solog
 * @since solog 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<span class="solog-credits"><a href="https://github.com/mkaz/solog-theme">solog theme</a> 
			by <a href="http://mkaz.com/" title="Marcus Kazmierczak" rel="designer">mkaz</a></span>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'a kick ass cms and blog platform', 'solog' ); ?>" rel="generator"><?php printf( __( 'proudly powered by %s', 'solog' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

