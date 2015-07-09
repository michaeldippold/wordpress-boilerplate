<?php

    add_action('wp_enqueue_scripts', 'sitename_enque_scripts');

    function sitename_enque_scripts() {

        wp_deregister_script('jquery'); // Deregister WordPress jQuery
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), '1.9.1'); // Google CDN jQuery
        wp_enqueue_script('jquery'); // Enqueue it!

        /* Custom styles and js */
        wp_register_style('theme-styles', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
        wp_enqueue_style('theme-styles'); // Enqueue it!

        wp_register_script('theme-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0'); 
        wp_enqueue_script('theme-js'); // Enqueue it!

        /* Bootstrap! */
        wp_register_style('bootstrap-style', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css', array());
        wp_enqueue_style('bootstrap-style'); // Enqueue it!

        wp_register_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js', array(), '1.0'); 
        wp_enqueue_script('bootstrap'); // Enqueue it! 

        /* Slick JS. CSS is imported via SASS */
        wp_register_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0'); 
        wp_enqueue_script('slick-js'); // Enqueue it! 

     
    }

function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'footer-menu' => __('Footer Menu', 'html5blank') // Footer Navigation
    ));
}
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu





// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

?>