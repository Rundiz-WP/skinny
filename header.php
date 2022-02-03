<?php
/** 
 * Skinny theme.
 * 
 * This file is not required by WordPress nor Theme Check but for split the HTML into its purpose.
 * 
 * @package skinny
 * @since 0.1
 * @license http://opensource.org/licenses/MIT MIT
 */
?>
<!-- header.php -->
<!DOCTYPE html>
<html <?php language_attributes();// required by Theme Check. ?>>
    <head>
        <meta charset="<?php bloginfo('charset');// required by Theme Check. ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- responsive view port -->
        <?php
        // `wp_head()` is required to render enqueued style.css no duplicated.
        // `wp_head()` is required by Theme Check.
        wp_head();
        ?> 
    </head>
    <body <?php 
    // `body_class()` is required by Theme Check.
    body_class(); 
    ?>>
        <?php
        if (function_exists('wp_body_open')) {
            // `wp_body_open()` is required by Theme Check.
            // `wp_body_open()` is available since WP 5.2.0
            wp_body_open();
        } else {
            do_action('wp_body_open');
        }
        ?> 
        <!-- end header.php -->
