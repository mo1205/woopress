<?php

	// load script

	function load_file(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4', 'all');
		wp_enqueue_style( 'woopress', get_template_directory_uri() . '/css/woopress.css', array(), '1', 'all');
		wp_enqueue_script( 'jquery-1.12.2', get_template_directory_uri() . '/js/jquery-1.12.2.min.js', array  ( 'jquery' ), "1.12.2", true);
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), "3.3.6", true);
	}

	add_action('wp_enqueue_scripts','load_file');

	register_nav_menus(array(
		'main_menu' => 'Main Menu'
	));

	// excerpt

	function get_excerpt_length(){
		return 10;
	}

	function return_excerpt_text(){
		return '';
	}

	add_filter('excerpt_length', 'get_excerpt_length');
	add_filter('excerpt_more', 'return_excerpt_text');


?>