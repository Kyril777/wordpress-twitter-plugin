<?php
/*
Plugin Name: Twitter Plugin
Plugin URI: http://localhost/twitterplugin
Description: This is a WordPress Twitter plugin.
Author: Kyril J.
Author URI: http://www.iKyril.com
Version: 1.0
*/

/*
  Global variables.
*/

// Retrieves plugin settings from the options table.
$options = get_option('settings');


/*
  Includes
*/

include('includes/scripts.php');
include('includes/data-processing.php');
include('includes/functions.php');
include('includes/admin-page.php');
