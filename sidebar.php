<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package solog
 * @since solog 1.0
 */
?>

<div id="secondary" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>

	<div class="widget-area">
	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside>

		<aside id="archives" class="widget">
			<h1 class="widget-title"><?php _e( 'Archives', 'solog' ); ?></h1>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

		<aside id="meta" class="widget">
			<h1 class="widget-title"><?php _e( 'Meta', 'solog' ); ?></h1>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>

	<?php endif; // end sidebar widget area ?>
	</div>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
			
		<div class="solog-credits">
			<a href="https://github.com/mkaz/solog-theme" rel="source">solog theme</a> 
			by <a href="http://mkaz.com/" title="Marcus Kazmierczak" rel="designer">mkaz</a>
		</div>
		
		<div class="wp-credits">
			Proudly Powered by <a href="http://wordpress.org/" rel="generator">WordPress</a>
		</div>
		
	</footer>
	
</div><!-- #secondary -->
