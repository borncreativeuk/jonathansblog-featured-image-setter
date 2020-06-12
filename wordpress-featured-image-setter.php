<?php
  /*
  Plugin name: wordpress featured image- etter
  Plugin URI: https://jonathansblog.co.uk/
  Description: plugin to set all posts without featured image to have an image
  Author: Jonathan Mitchell
  Author URI: https://jonathansblog.co.uk/
  Version: 0.1
  */

// include vendor autoload if present
if (file_exists(WP_PLUGIN_DIR . '/wordpress-featured-image-setter/vendor/autoload.php')) {
	require_once WP_PLUGIN_DIR . '/wordpress-featured-image-setter/vendor/autoload.php';
}

// include admin page if present
if (file_exists(WP_PLUGIN_DIR . '/wordpress-featured-image-setter/include/wordpress-featured-image-setter-admin.php')) {
	require_once WP_PLUGIN_DIR . '/wordpress-featured-image-setter/include/wordpress-featured-image-setter-admin.php';
}

register_activation_hook( __FILE__, 'wordpress_featured_image_setter_activate' );
function wordpress_featured_image_setter_activate() {
    //code 
}
 
register_deactivation_hook( __FILE__, 'wordpress_featured_image_setter_deactivate' );
function wordpress_featured_image_setter_deactivate() {
    //code
}

register_uninstall_hook( __FILE__, 'wordpress_featured_image_setter_uninstall' );
function wordpress_featured_image_setter_uninstall() {
    //code 
}

add_action( 'init', 'wordpress_featured_image_setter_dostuff' );
function wordpress_featured_image_setter_dostuff(){
	//code
}

