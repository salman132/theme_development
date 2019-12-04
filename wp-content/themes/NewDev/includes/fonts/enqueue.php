<?php

function su_enqueue(){
    wp_register_style('su_google_fonts','http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css');
    wp_register_style('su_bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
    wp_register_style('su_style', get_template_directory_uri() .'/assets/style.css');
    wp_register_style('su_dark', get_template_directory_uri() .'/assets/css/dark.css');
    wp_register_style('su_font_icons', get_template_directory_uri() .'/assets/css/font-icons.css');
    wp_register_style('su_magnific_popup', get_template_directory_uri() .'/assets/css/magnific-popup.css');
    wp_register_style('su_responsive', get_template_directory_uri() .'/assets/css/responsive.css');
    wp_register_style('su_custom', get_template_directory_uri() .'/assets/css/custom.css');

    wp_enqueue_style('su_google_fonts');
    wp_enqueue_style('su_bootstrap');
    wp_enqueue_style('su_style');
    wp_enqueue_style('su_dark');
    wp_enqueue_style('su_font_icons');
    wp_enqueue_style('su_magnific_popup');
    wp_enqueue_style('su_responsive');
    wp_enqueue_style('su_custom');


    wp_register_script('su_plugins', get_template_directory_uri() .'/assets/js/plugins.js',array(),false,true);
    wp_register_script('su_functions', get_template_directory_uri() .'/assets/js/functions.js',array(),false,true);


    wp_enqueue_script('jquery');
    wp_enqueue_script('su_plugins');
    wp_enqueue_script('su_functions');
}
