<?php
/**
 * The Template for displaying all single posts.
 *
 * @package solog
 * @since solog 1.0
 */

	get_header();
?>

<section id="primary" class="content-area" role="main">

	<?php

	while ( have_posts() ) : the_post();

		get_template_part( 'content', 'single' );

		solog_content_nav( 'nav-below' );

		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
			comments_template();


	endwhile; // end of the loop.

	?>

</section>

<?php

get_sidebar();

get_footer();

?>
