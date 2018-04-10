<?php

/*
  Controls the scripts
*/

// Loads the stylesheet
function load_scripts(){
  wp_enqueue_style('styles', plugin_dir_url( __FILE__ ) . 'stylesheet/styles.css');
}

add_action('wp_enqueue_scripts', 'load_scripts');
