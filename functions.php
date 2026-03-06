<?php

function add_scripts_and_styles() {

    wp_enqueue_style(
        'index',
        get_stylesheet_directory_uri() . '/assets/css/index.css'
    );

}

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
