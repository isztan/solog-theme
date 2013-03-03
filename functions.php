<?php

# stop smart quoting
remove_filter('the_content', 'wptexturize');

$theme_directory = dirname( get_bloginfo('stylesheet_url') );

wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'solog-javascript', $theme_directory . '/solog.js', array('jquery'), '1.0', true );
wp_enqueue_script( 'prettify-javascript', $theme_directory . '/prettify/prettify.js', array('solog-javascript'), '1.0', true );
wp_enqueue_style( 'prettify-style', $theme_directory . '/prettify/prettify.css' );

add_action('twentytwelve_credits', 'solog_credits');
function solog_credits() {
	echo '<span class="solog-credits"><a href="https://github.com/mkaz/solog-theme">solog theme</a> by <a href="http://mkaz.com/" rel="designer">mkaz</a></span>';
}

