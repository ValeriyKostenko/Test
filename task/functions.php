<?php
 

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'task_styles' );
add_action( 'wp_footer', 'task_styles_footer' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );

function jquery_lib(){
	wp_deregister_script( 'jquery-core');
	wp_register_script( 'jquery-core', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}

function task_styles() {
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	
}

function task_styles_footer() {

}

add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );
add_image_size( 'blog-preview', 382, 240, true );
add_image_size( 'team-preview', 380, 470, true );


/*
* Custom post type
*/

function task_create_post_type() {
	register_post_type( 'task_team',
		array(
			'labels' => array(
				'name' => ( 'Team' ),
				'singular_name' => ( 'Teammate' ),
			),
			'menu_position' => 5,
			'supports' => array('title','editor', 'thumbnail', 'post-formats', 'excerpt'),
			'public' => true,
			'rewrite' => 'ourteam',
			'has_archive' => true,
		)
	);
}

add_action( 'init', 'task_create_post_type' );
