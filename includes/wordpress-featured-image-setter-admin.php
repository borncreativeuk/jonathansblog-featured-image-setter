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


add_action('admin_post_wordpress_featured_image_setter_form_response', 'save_wordpress_featured_image_setter_admin_stuff');
function save_wordpress_featured_image_setter_admin_stuff(){
    $url = admin_url('options-general.php?page=Set+Missing+Featured+Images');
        if( !empty( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'wordpress-featured-image-setter-form-nonce') ) {
    
            // sanitize the input
            $image_id=absint($_REQUEST['image_id']);
            // do the processing
            set_all_posts_without_featured_image_set($image_id);
            // redirect the user to the appropriate page
            
            wp_safe_redirect($url); 
            exit();
        } else {
            wp_die( __( 'Invalid nonce specified', 'wordpress-featured-image-setter' ), __( 'Error', 'wordpress-featured-image-setter' ), array(
                        'response' 	=> 403,
                        'back_link' => $url,
    
                ) );
        }
}
