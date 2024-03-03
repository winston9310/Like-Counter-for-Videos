<?php
/*
Plugin Name: Like Counter for Videos
Description: The "Like Counter for Videos" plugin allows users to give "likes" to embedded videos on a WordPress page. By double-tapping a video, a like heart will be displayed, and the like count will increase. NEED "reel" class
Version: 1.0
Author: WinstonDev - Winston Porras 
Author URI: https://winstondev.site
*/

// Agregar scripts y estilos necesarios
function agregar_scripts_estilos() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('plugin-like-videos', plugin_dir_url(__FILE__) . 'like-videos.js', array('jquery'), '1.0', true);
    wp_enqueue_style('plugin-like-css', plugin_dir_url(__FILE__) . 'like-videos.css');
}
add_action('wp_enqueue_scripts', 'agregar_scripts_estilos');
