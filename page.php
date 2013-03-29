<?php
/**
 * The template for displaying all pages.
 *
 * @package solog
 * @since solog 1.0
 */
?>

<section id="primary" class="content-area" role="main">

	<?php

	get_header();

	while ( have_posts() ) : the_post();

		get_template_part( 'content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
			comments_template();


	endwhile; // end of the loop.

	get_footer();

	?>

</section>

<?php get_sidebar(); ?>
