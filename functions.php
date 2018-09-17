<?php

function hola_wp_files() {
    wp_enqueue_style('hola-base', get_theme_file_uri('/css/base.css'));
    wp_enqueue_style('hola-vendor', get_theme_file_uri('/css/vendor.css'));
    wp_enqueue_style('hola-main', get_theme_file_uri('/css/main.css'));
    wp_enqueue_script('modernizr', get_theme_file_uri('/js/modernizr.js'), NULL, '1.0', false);
    wp_enqueue_script('pace', get_theme_file_uri('/js/pace.min.js'), NULL, '1.0', false);
    wp_enqueue_script('jquery-3.2.1', get_theme_file_uri('/js/jquery-3.2.1.min.js'), NULL, '3.2.1', true);
    wp_enqueue_script('plugins', get_theme_file_uri('/js/plugins.js'), NULL, '1.17.0', true);
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'hola_wp_files');

function hola_wp_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menu('primary-menu', 'Primary Menu');
}

add_action('after_setup_theme', 'hola_wp_features');

add_action('admin_head', 'remove_content_editor');
/**
 * Remove the content editor from pages as all content is handled through Panels
 */
function remove_content_editor()
{
    if((int) get_option('page_on_front')==get_the_ID())
    {
        remove_post_type_support('page', 'editor');
    }
}

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/includes/plugins/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/includes/plugins/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_true');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/includes/plugins/acf/acf.php' );