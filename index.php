<?php
/**
 * The main template file.
 *
 * @package solog
 * @since solog 1.0
 */

	get_header();
?>

<section id="primary" class="content-area"  role="main">
<?php

	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile;

		solog_content_nav( 'nav-below' );

	else :

		get_template_part( 'no-results', 'index' );

	endif;

?>
</section>

<?php

get_sidebar();

get_footer();
