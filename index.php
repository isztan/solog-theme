<?php
/**
 * The main template file.
 *
 * @package solog
 * @since solog 1.0
 */
?>

<div id="primary" class="content-area"  role="main">
	
	<?php 
	
	get_header(); 
	
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() );
			
		endwhile;

		solog_content_nav( 'nav-below' );

	else :

		get_template_part( 'no-results', 'index' );

	endif;

	get_footer(); 
	
	?>

</div><!-- #primary -->

<?php get_sidebar(); ?>
