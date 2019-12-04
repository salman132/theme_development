<?php

function su_widgets(){
    add_theme_support( 'widgets' );
    register_sidebar(array(
        'name' => __('Theme Sidebar','NewDev'),
        'id'   => 'su_sidebar',
        'description' => __('Sidebar for the theme NewDev','NewDev'),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'=>'</div>',
        'before_title'=> '<h4>',
        'after_title' => '</h4>'
    ));
}