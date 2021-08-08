<?php
// function register_nav() {
//     register_nav_menus ( 
//         array(
//             "header" => "Header",
           
          
//         )
//     );

//     register_nav_menus ( 
//         array(
//              "footer" => "Footer",
//         )
//     );

//     register_nav_menus ( 
//         array(
//               "404" => "404"
//         )
//     );
// }

function davew_menus(){

            $locations = array(

                "header" => "Header",
            "footer" => "Footer",
            "404" => "404"
            );

            register_nav_menus($locations);

}

add_action('init', 'davew_menus');

function davew_register_styles(){

     wp_enqueue_style('davew_style', get_template_directory_uri() . '/style.css', array(), '1.0','all');
   

}

add_action('wp_enqueue_scripts', 'davew_register_styles');

// function themename_enqueue_style() {
//     wp_enqueue_style( 'themename-style', get_stylesheet_uri() ); 
// }
// add_action( 'wp_enqueue_scripts', 'themename_enqueue_style' );



if (! function_exists('setup')):
    function setup(){
        // register_nav();
        add_theme_support('post-thumbnails');
        add_image_size('team', 475, 475, array('center','center'));
    }
endif;






// function scripts_header(){
//     wp_enqueue_style('init', get_stylesheet_uri());
// }


// function scripts_footer(){
//     //wp_enqueue_script('init', get_template_directory_uri().'/js/init.js', array('jquery'));
// }

add_action('after_setup_theme', 'setup');
// add_action('wp_enqueue_scripts', 'scripts_header');

//add_action('wp_footer', 'scripts_footer');

/* Shortcodes */
require_once('shortcodes/practice-areas.php');
require_once('shortcodes/team.php');
