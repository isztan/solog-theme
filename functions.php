<?php
/**
 * solog functions and definitions
 *
 * @package solog
 * @since solog 1.0
 */


# stop smart quoting
remove_filter('the_content', 'wptexturize');

if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

require( get_template_directory() . '/inc/jetpack.php' );

###
if ( ! function_exists( 'solog_setup' ) ) :
	function solog_setup() {

		require( get_template_directory() . '/inc/template-tags.php' );
		require( get_template_directory() . '/inc/extras.php' );
		require( get_template_directory() . '/inc/customizer.php' );
		load_theme_textdomain( 'solog', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'solog' ),
		) );

		//add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	}
endif; // solog_setup
add_action( 'after_setup_theme', 'solog_setup' );


###
function solog_register_custom_background() {
	$args = array(
		'default-color' => 'F0F0F0',
		'default-image' => get_template_directory_uri() . '/img/project-papper.png',
	);

	$args = apply_filters( 'solog_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	}
}
add_action( 'after_setup_theme', 'solog_register_custom_background' );


###
function solog_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'solog' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'solog_widgets_init' );


###
function solog_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'error-track-javascript', get_template_directory_uri() . '/js/error-track.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() ) {
		wp_enqueue_script( 'solog-javascript', get_template_directory_uri() . '/js/solog.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'prettify-javascript', get_template_directory_uri() . '/js/prettify/prettify.js', array('solog-javascript'), '1.0', true );
		wp_enqueue_style( 'prettify-style', get_template_directory_uri() . '/js/prettify/prettify.css' );
	}

}
add_action( 'wp_enqueue_scripts', 'solog_scripts' );

