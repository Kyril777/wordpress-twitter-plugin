<?php

// Outputs HTML content on the admin page.
function options_page(){

  global $options;

  ob_start(); ?>
  <div class="wrap">
    <h2>Our WP Options</h2>

    <form method="post" action="options.php">
      <?php settings_fields('settings_group'); ?>

      <h4><?php _e('Enable', 'domain'); ?></h4>
      <p>
        <input id="settings[enable]" name="settings[enable]" type="checkbox" value="1" <?php checked('1', $options['enable']); ?> />
        <label class="description" for="settings[enable]"><?php _e('Display the Twitter \'follow me\' link', 'domain'); ?></label>
      </p>

      <h4><?php _e('Twitter Info', 'domain'); ?></h4>
      <p>
        <label class="description" for="settings[twitter_url]">
        <?php _e('Enter the Twitter URL', 'domain'); ?>
        <input id="settings[twitter_url]" name="settings[twitter_url]" type="text" value="<?php echo $options['twitter_url']; ?>"/>
      </p>

      <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save', 'domain'); ?>" />
      </p>
    </form>

  </div>
  <?php
  echo ob_get_clean();
}

function add_options_link(){
  add_options_page(
    'WordPress Plugin Options', 'Twitter Plugin', 'manage_options', 'options', 'options_page');
}

add_action('admin_menu', 'add_options_link');

// Register a setting with WordPress that stores our plugin options.
function register_settings(){
  register_setting('settings_group', 'settings');
}
add_action('admin_init', 'register_settings');
