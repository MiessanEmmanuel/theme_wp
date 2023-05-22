<?php

//-----------------variables
define('NAME', 'Ariel');

//---------------Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));

//---------------hooks

//https://developer.wordpress.org/reference/functions/add_action/ documentation add_action
add_action('wp_enqueue_scripts', 'g_enqueue');
add_action('wp_head', 'g_head',5);



