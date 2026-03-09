<?php

function feinschliff_styles() {

wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/assets/css/index.css',
    array(),
    filemtime(get_template_directory() . '/assets/css/index.css')
);

}

add_action('wp_enqueue_scripts', 'feinschliff_styles');