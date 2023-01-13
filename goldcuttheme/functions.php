<?php

// Added stylesheets
function load_stylessheets() {
    wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style("bootstrap", get_template_directory_uri()."/css/bootstrap.css");
    /* wp_enqueue_style("font-awesome", get_template_directory_uri()."/css/font-awesome.css"); */
}

add_action('wp_enqueue_scripts', 'load_stylessheets');

function my_enqueue_scripts()
{
    wp_register_script( 'custom', get_template_directory_uri() . '/app.js' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/app.js', 'jquery', 1, false); 
    /* wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3.3.4', true ); */
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );


// Added support for woocommerce
add_theme_support('woocommerce');

// Added support for menus 
add_theme_support('menus');

// Added support for widets
add_theme_support('widgets');

add_theme_support("post-thumbnails");


// Added Top-menu 
register_nav_menus(

    array(
        'top-menu' => 'Top Menu',
        'footer-menu'  => 'Footer Menu',
    )
);

function allow_menu_editor() {
	$arr_menu = array_filter(get_nav_menu_locations());
	if ( ! empty($arr_menu) ) {
		$obj_role = get_role('editor');
		$obj_role->add_cap('edit_theme_options');
	}
}

add_action( 'admin_menu', 'allow_menu_editor', 999);

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');


function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer social icons',
      'id'            => 'footer-social-icons',
      'description'   => 'Widget Social Media',
      'before_widget' => '<section class="footer-widget-social">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',


    ));

    register_sidebar( array(
        'name'          => 'Footer contact',
        'id'            => 'footer-contact',
        'description'   => 'Widget Kontakt',
        'before_widget' => '<section class="footer-widget-contact">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
  
        
      ));

      register_sidebar( array(
        'name'          => 'Footer service',
        'id'            => 'footer-service',
        'description'   => 'Widget Service',
        'before_widget' => '<section class="footer-widget-service">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
  
        
      ));
    
  }
  
add_action( 'widgets_init', 'register_widget_areas' );

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}

add_filter('upload_mimes', 'add_file_types_to_uploads');


 
function my_remove_product_tabs( $tabs ) {
  unset( $tabs['additional_information'] );
  unset( $tabs['reviews'] ); 
  return $tabs;
}

add_filter( 'woocommerce_product_tabs', 'my_remove_product_tabs', 98 );

/* 
add_filter( 'wc_add_to_cart_message_html', '__return_false' ); */

add_filter( 'woocommerce_cart_item_removed_notice_type', '__return_false' );


add_filter( 'gettext', function( $translated_text ) {
    if ( 'Delsumma' === $translated_text ) {
        $translated_text = 'Summa';
    }
    return $translated_text;
} );




function cart_continue_shopping() {
    echo '<div class="continue-shopping">Fortsätt handla</div>';
}
add_action ('woocommerce_before_cart_contents', 'cart_continue_shopping');


function border_berofe_cart_woocommerce(){

   echo '<div class="border-cart"><h1 class="h1-cart">DIN KUNDVAGN<h1></div>';
}

add_action( 'woocommerce_before_cart_table', 'border_berofe_cart_woocommerce' );

