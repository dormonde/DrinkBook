<?php

require_once 'class-wp-bootstrap-navwalker.php';


//excerpt length
add_filter( 'excerpt_length', function($length) {
    return 20;
} );
//excerpt length end


function enqueue_my_custom_styles() {
    wp_enqueue_style('bs_style', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('fa_style', "https://use.fontawesome.com/releases/v5.7.2/css/all.css");
    wp_enqueue_style( 'recipeStyle', get_template_directory_uri() . "/css/recipebook.css", false, '1.0.4', 'all' );
    
}

add_action( 'wp_enqueue_scripts', 'enqueue_my_custom_styles' ); 

// include custom jQuery
function include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'include_custom_jquery');


function enqueue_my_scripts() {
    
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js', array('jquery'), true);
    wp_enqueue_script( 'myJS', get_template_directory_uri() . "/js/recipebook.js", true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');


add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
            'top_menu' => __('Top Menu', 'theme'),
            'footer_menu' => __('Footer Menu', 'theme'),
    
    
    )
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);