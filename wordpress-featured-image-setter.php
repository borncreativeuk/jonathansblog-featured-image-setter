<?php
  /*
  Plugin name: jonathansblog featured image setter
  Plugin URI: https://jonathansblog.co.uk/
  Description: plugin to set all posts without featured image to have an image
  Author: Jonathan Mitchell
  Author URI: https://jonathansblog.co.uk/
  Version: 0.1
  */

// include vendor autoload if present
if (file_exists(WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/vendor/autoload.php')) {
	require_once WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/vendor/autoload.php';
}

// include admin page if present
if (file_exists(WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/jonathansblog-featured-image-setter-admin.php')) {
	require_once WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/jonathansblog-featured-image-setter-admin.php';
}

// helper functions
if (file_exists(WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/helper.php')) {
	require_once WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/includes/helper.php';
}


register_activation_hook( __FILE__, 'jonathansblog_featured_image_setter_activate' );
function jonathansblog_featured_image_setter_activate() {
    //code 
}
 
register_deactivation_hook( __FILE__, 'jonathansblog_featured_image_setter_deactivate' );
function jonathansblog_featured_image_setter_deactivate() {
    //code
}

register_uninstall_hook( __FILE__, 'jonathansblog_featured_image_setter_uninstall' );
function jonathansblog_featured_image_setter_uninstall() {
    //code 
}

add_action( 'init', 'jonathansblog_featured_image_setter_dostuff' );
function jonathansblog_featured_image_setter_dostuff(){
	//code
}

