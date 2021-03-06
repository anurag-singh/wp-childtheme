<?php

// Hide admin bar from backend

add_filter('show_admin_bar', '__return_false');

// remove meta tag 'generator' from front-end

remove_action('wp_head', 'wp_generator');

// Remove WP logo from top left area

function remove_logo_from_admin_bar()
{
    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('wp-logo');

}

add_action('wp_before_admin_bar_render', 'remove_logo_from_admin_bar', 0);

// Replace default footer text

function remove_footer_admin()

{

    echo '<span id="footer-thankyou">Made with love and lots of coffee.</span>';

}

add_filter('admin_footer_text', 'remove_footer_admin');
