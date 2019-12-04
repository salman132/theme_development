<?php

//Setup

//Includes
include(get_template_directory() . '/includes/fonts/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');


//Hooks

add_action('wp_enqueue_scripts','su_enqueue');
add_action('after_setup_theme','su_setup_theme');
add_action('widgets_init','su_widgets');


//Shortcodes