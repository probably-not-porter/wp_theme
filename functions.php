<?php

function load_stylesheets(){
    // load bootstrap
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstap');

    // load custom styles
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

function load_js(){
    // load custom JS
    wp_register_script('customjs', get_template_directory_uri() . "/js/scripts.js", '', 1, true);
    wp_enqueue_script('customjs');
}

function load_jquery(){
    // load jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1);
}

// enqueue functions
add_action('wp_enqueue_scripts','load_stylesheets');
add_action('wp_enqueue_scripts','load_js');
add_action('wp_enqueue_scripts','load_jquery');
?>