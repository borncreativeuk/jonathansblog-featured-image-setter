<?php

add_action('admin_menu', 'jonathansblog_featured_image_setter_admin_stuff');
function jonathansblog_featured_image_setter_admin_stuff(){
	add_options_page("Set Missing Featured Images", "Set Missing Featured Images", 1, "Set Missing Featured Images", "jonathansblog_featured_image_setter_admin_view");
}

function jonathansblog_featured_image_setter_admin_view(){
	// include admin view
	if (file_exists(WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/views/jonathansblog-featured-image-setter-admin-view.php')) {
		require_once WP_PLUGIN_DIR . '/jonathansblog-featured-image-setter/views/jonathansblog-featured-image-setter-admin-view.php';
	}
}


add_action('admin_post_jonathansblog_featured_image_setter_form_response', 'save_jonathansblog_featured_image_setter_admin_stuff');
function save_jonathansblog_featured_image_setter_admin_stuff(){
    $url = admin_url('options-general.php?page=Set+Missing+Featured+Images');
        if( !empty( $_POST['_wpnonce'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'jonathansblog-featured-image-setter-form-nonce') ) {
    
            // sanitize the input
            $image_id=absint($_REQUEST['image_id']);
            // do the processing
            set_all_posts_without_featured_image_set($image_id);
            // redirect the user to the appropriate page
            
            wp_safe_redirect($url); 
            exit();
        } else {
            wp_die( __( 'Invalid nonce specified', 'jonathansblog-featured-image-setter' ), __( 'Error', 'jonathansblog-featured-image-setter' ), array(
                        'response' 	=> 403,
                        'back_link' => $url,
    
                ) );
        }
}
