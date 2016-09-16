<?php

/* -------------------------------- */
function dm_script_enqueue(){

    <!--wp_enqueue_style('bodyfont', 'https://fonts.googleapis.com/css?family=Pontano+Sans', array(), '0.0.1', 'all');
    wp_enqueue_style('headingfont', 'https://fonts.googleapis.com/css?family=Bitter:700', array(), '0.0.1', 'all');

    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), '0.0.1', 'all');
    wp_enqueue_style('ct-paper', get_template_directory_uri().'/css/ct-paper.css', array(), '0.0.1', 'all');
    wp_enqueue_style('dm-style', get_template_directory_uri().'/css/theme.css', array(), '0.0.3', 'all');
    wp_enqueue_style('fontello', get_template_directory_uri().'/fontello/css/fontello.css', array(), '0.0.5', 'all');

    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js', array(), '0.0.1', true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array(), '0.0.1', true);
    wp_enqueue_script('countdown', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.1.0/jquery.countdown.min.js', array(), '0.0.1', true);
    wp_enqueue_script('appjs', get_template_directory_uri().'/js/app.js', array(), '0.0.8', true);-->

}
add_action('wp_enqueue_scripts', 'dm_script_enqueue');

/* -------------------------------- */
function dm_theme_setup(){

    add_theme_support( 'title-tag' );
    add_theme_support('menus');

    register_nav_menu('header','Header Navigation');
    register_nav_menu('footer','Footer Navigation');

}
add_action('init', 'dm_theme_setup');

/* -------------------------------- */
add_theme_support('custom-background');
add_theme_support('post-thumbnails');

/* -------------------------------- */
function dm_widget_setup(){

    /*register_sidebar(
        array(
            'name'          => __( 'Default Sidebar', 'theme_slug' ),
            'id'            =>'sidebar-default',
            'class'         =>'default',
            'description'   =>'Default Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );*/

}

add_action('widgets_init', 'dm_widget_setup');

function dm_remove_version(){
    return '';
}
add_filter('the_generator', 'dm_remove_version');

require get_template_directory().'/inc/worker.php';