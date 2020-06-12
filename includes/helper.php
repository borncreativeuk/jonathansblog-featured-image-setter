<?php

function count_all_posts_without_featured_image_set(){
    $args = array(
        'post_type'  => 'post',
        'meta_query' => array(
            array(
             'key' => '_thumbnail_id',
             'compare' => 'NOT EXISTS'
            ),
        )
     );
     $query = new WP_Query($args);
     return $query->found_posts;
}

function count_all_posts_with_featured_image_set(){
    $args = array(
        'post_type'  => 'post',
        'meta_query' => array(
            array(
             'key' => '_thumbnail_id',
             'compare' => 'EXISTS'
            ),
        )
     );
     $query = new WP_Query($args);
     return $query->found_posts;
}

function show_media_library() {
    // jQuery
wp_enqueue_script('jquery');
// This will enqueue the Media Uploader script
wp_enqueue_media();
?>
    <div>
    <label for="image_url">Set Featured Image</label>
    <input type="hidden" name="image_id" id="image_id" class="regular-text">
    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Select Image">
    <input type="button" name="apply-btn" id="apply-btn" class="button-secondary" value="Apply" style="display:none;">

</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    if ($('#image_id').val()) {
        $('#apply-btn').show()
    } else {
        $('#apply-btn').hide()
    }
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_id = uploaded_image.toJSON().id;
            // Let's assign the url value to the input field
            $('#image_id').val(image_id);
            if ($('#image_id').val()) {
                $('#apply-btn').show()
            }
        });
    });
});
</script>
<?php
}