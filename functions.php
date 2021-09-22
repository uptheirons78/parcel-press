<?php

/** Enqueue js and css files */
function parcel_press_scripts() {
  wp_enqueue_script( 'parcel-press-scripts', get_theme_file_uri('/dist/main.js') );
  wp_enqueue_style( 'parcel-press-style', get_theme_file_uri( '/dist/main.css' ) );
}

add_action('wp_enqueue_scripts', 'parcel_press_scripts');

/** Theme Features */
function parcel_press_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'parcel_press_features');