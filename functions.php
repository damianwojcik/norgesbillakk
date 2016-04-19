<?php
	
	define("THEME_URL", get_stylesheet_directory_uri());
	define("SITE_URL", site_url());

	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );


	if (function_exists( 'register_sidebar' )) {

		register_sidebar(array(
			'name' => 'Menu główne',
			'id'  => 'main_menu',
			'before_title' => '', 
			'after_title' => '',
			'before_widget' => '',
			'after_widget'  => '',
		));

	}

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Home settings',
			'menu_title'	=> 'Home settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
	}