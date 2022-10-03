<?php
	// var_dump(get_template_directory_uri());die();

	// SET UP - DEFINE
	define('THEME_URI', get_theme_file_uri());
	define('THEME_PATH', get_theme_file_path());

	// INCLUDES

	include(get_theme_file_path() .'/includes/enqueue.php');

	include(get_theme_file_path() . '/includes/setup.php');



	// HOOK ACTION - FILTER
	add_action('wp_enqueue_scripts' , 'glw_enqueue');
	add_action('init', 'glw_theme_setup')

	// SHORTCODE
?>