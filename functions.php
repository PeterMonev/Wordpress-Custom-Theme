<?php

function load_css() {
   wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js() {
   wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_js');

function enqueue_font_awesome() {
   wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), '5.15.1', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

function register_custom_menus() {
   register_nav_menus(array(
       'primary' => __('Primary Menu', 'your-theme-name'),
   ));
}
add_action('after_setup_theme', 'register_custom_menus');

function custom_theme_setup() {
   add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'custom_theme_setup');

function custom_post_type_services() {
   $labels = array(
       'name'               => _x('Services', 'post type general name'),
       'singular_name'      => _x('Service', 'post type singular name'),
       'add_new'            => _x('Add New', 'service'),
       'add_new_item'       => __('Add New Service'),
       'edit_item'          => __('Edit Service'),
       'new_item'           => __('New Service'),
       'view_item'          => __('View Service'),
       'search_items'       => __('Search Services'),
       'not_found'          => __('No services found'),
       'not_found_in_trash' => __('No services found in Trash'),
       'parent_item_colon'  => '',
       'menu_name'          => 'Services'
   );

   $args = array(
       'labels'        => $labels,
       'public'        => true,
       'menu_position' => 5,
       'supports'      => array('title', 'editor', 'thumbnail'),
       'has_archive'   => true,
   );

   register_post_type('services', $args);
}
add_action('init', 'custom_post_type_services');
