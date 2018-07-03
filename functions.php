<?php 

function load_scripts(){
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ), '4.1.1', true );
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

register_nav_menus(
	array(
        'my_main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
	)
);