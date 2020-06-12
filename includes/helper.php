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