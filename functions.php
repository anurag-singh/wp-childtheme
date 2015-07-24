<?php
add_action( 'wp_enqueue_scripts', 'load_scripts' );
function load_scripts() {
    // load styles
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-1.11.2.min.js');
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js');
    // load parent theme css
    if ( is_child_theme() ) {
      	#wp_enqueue_style( 'parent-theme', trailingslashit( get_template_directory_uri() ) . 'style.css'  );
    }
    // load child theme css
    # wp_enqueue_style( 'style', get_stylesheet_uri() );		// uncomment if child stylesheet not loaded by default
    // load javascript
}


add_action( 'twentyfifteen_credits', 'twenty_fifteen_right_credits_handler' );
function twenty_fifteen_right_credits_handler(){
    ?>
    <p class="text-center">Child Theme Designed by <a href="https://www.anuragsingh.me/" target="_blank">Anurag Singh</a></p>
    <?php
}
