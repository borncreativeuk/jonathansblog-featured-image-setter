<?php

add_action('admin_menu', 'wordpress_featured_image_setter_admin_stuff');
function wordpress_featured_image_setter_admin_stuff(){
	add_options_page("Set Missing Featured Images", "Set Missing Featured Images", 1, "Set Missing Featured Images", "wordpress_featured_image_setter_admin_view");
}

function wordpress_featured_image_setter_admin_view(){
	// include admin view
	if (file_exists(WP_PLUGIN_DIR . '/wordpress-featured-image-setter/views/wordpress-featured-image-setter-admin-view.php')) {
		require_once WP_PLUGIN_DIR . '/wordpress-featured-image-setter/views/wordpress-featured-image-setter-admin-view.php';
	}
}