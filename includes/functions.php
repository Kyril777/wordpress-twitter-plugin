<?php

function add_content($content) {

  global $options;

  if (is_singular() && $options['enable'] == true ){
    $extra_content = '<p class="twitter-message">Follow me on <a href="' . $options['twitter_url'] . '">Twitter</a></p>';
    $content .= $extra_content;
  }
  return $content;
}

add_filter('the_content', 'add_content');
