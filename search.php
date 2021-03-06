<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package solog
 * @since solog 1.0
 */

	get_header();

?>

<section id="primary" class="content-area" role="main">
	<?php

	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'solog' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<?php

		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'search' );

		endwhile;

		solog_content_nav( 'nav-below' );

	else :

		get_template_part( 'no-results', 'search' );

	endif;

?>

</section>

<?php

get_sidebar();

get_footer();
