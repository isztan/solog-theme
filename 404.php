<?php
/**
 * 404 page (Not Found).
 *
 * @package solog
 * @since solog 1.0
 */
?>

<section id="primary" class="content-area" role="main">

	<?php get_header(); ?>

	<article id="post-0" class="post error404 not-found">

		<header class="entry-header">
			<h1 class="entry-title"><?php _e( '404 - Page Not Found', 'solog' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php _e( 'Content not found, please try one of the links below or search', 'solog' ); ?></p>

			<?php get_search_form(); ?>

			<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

			<div class="widget">
				<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'solog' ); ?></h2>
				<ul>
				<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
				</ul>
			</div><!-- .widget -->

			<?php the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>" ); ?>

		</div>
	</article>


	<?php get_footer(); ?>

</section>

<?php get_sidebar(); ?>
