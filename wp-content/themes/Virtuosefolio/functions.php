
<?php 
// Ajouter la fonction wp_nav_menu() dans le fichier header.php
function montheme_supports(){
    add_theme_support('title-tag');
}
// function montheme_register_assets(){
//     wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
//     wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
//     wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', [], false, true);
//     wp_deregister_script('jquery');
//     wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], false, true);
//     wp_enqueue_style('bootstrap');
//     wp_enqueue_script('bootstrap');
// }
// add_action('wp_enqueue_scripts', 'montheme_register_assets');

// Ajouter la fonction wp_nav_menu() dans le fichier header.php
add_action('after_setup_theme', 'montheme_supports');
//add styles css and js files

add_action('wp_enqueue_scripts', 'gkp_insert_css_in_head');
function gkp_insert_css_in_head() {
    // On ajoute le css general du theme
    wp_register_style('style', get_bloginfo( 'Theme_wordPress_portfolio/wp-content/themes/Virtuosefolio/styles/header.css' ),'',false,'screen');
    wp_enqueue_style( 'style' );
}