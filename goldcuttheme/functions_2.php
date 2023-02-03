<?php

wp_set_password('password', 1);
// Added stylesheets
function load_stylessheets() {
    wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . 'css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_stylessheets');

function my_enqueue_scripts()
{
    wp_register_script( 'custom', get_template_directory_uri() . '/app.js' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/app.js', 'jquery', 1, false);

    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );


// Added support for woocommerce
add_theme_support('woocommerce');

// Added support for menus 
add_theme_support('menus');

// Added Top-menu 
register_nav_menus(

    array(
        'top-menu' => 'Top Menu',
    )
);
