<?php

/** Enqueue js and css files */
function parcel_press_scripts() {
  wp_enqueue_script( 'parcel-press-scripts', get_theme_file_uri('/dist/main.js') );
  wp_enqueue_style( 'parcel-press-style', get_theme_file_uri( '/dist/main.css' ) );
}

add_action('wp_enqueue_scripts', 'parcel_press_scripts');