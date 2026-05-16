<?php
function feinschliff_styles()
{

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/index.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/index.css')
    );
}

add_action('wp_enqueue_scripts', 'feinschliff_styles');

function feinschliff_scripts()
{
    wp_enqueue_script(
        'menu-script',
        get_template_directory_uri() . '/assets/js/menu.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/menu.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'feinschliff_scripts');


function feinschliff_main_script()
{
    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'feinschliff_main_script');

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails', ['page']);
});


/** Image Register Menus **/
function mytheme_register_menus()
{
    register_nav_menus(
        [
            'header' => __('Header Menu'),
            'footer' => __('Footer Menu'),
        ]
    );
}

add_action('after_setup_theme', 'mytheme_register_menus');
/** End Register Menus **/







