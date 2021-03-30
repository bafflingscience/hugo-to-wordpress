<?php


function load_stylesheets() {


// STYLE ENQUEUEING

{

	wp_register_style('font', get_template_directory_uri() . '/fonts/this/is_some-webfont.css', array(), 1, 'all');
	wp_enqueue_style('font');
	
	wp_register_style('bootstrap', get_template_directory_uri() .'/src/css/stylesheet.min.somethingorother.css', array(), 1, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('pretty-style', get_template_directory_uri() . 'path/to/pretty-style.css');
	wp_enqueue_style('pretty-style',); 
	
	wp_register_style('ugly-style', get_template_directory_uri() . 'path/to/ugly.css', array(), 1, 'all');
	wp_enqueue_style('ugly-style');
	
	wp_register_style('custom', get_template_directory_uri() . '/custom/styles.css', array(), 1, 'all');
	wp_enqueue_style('custom');
  
}