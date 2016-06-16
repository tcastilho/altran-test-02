<?php
if (function_exists('add_theme_support')) { 
  add_theme_support('html5');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}
// add_image_size('image_work', 575, 324, array('center', 'center'));

function altran_scripts() {
  wp_register_script(
    'script',
    get_template_directory_uri() . '/js/script.js',
    array('jquery'),
    '1.0.0',
    true
  );
  wp_enqueue_script('script');
}
add_action( 'wp_enqueue_scripts', 'altran_scripts' );