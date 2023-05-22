<?php

function g_enqueue(){
    wp_register_style(
        'g_font_rubik_and_pacifico',
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        [],
        null
        //to refer to the documentation for others parameters https://developer.wordpress.org/reference/functions/wp_register_style/

    );
    wp_register_style(
        'g_bootstrap_icons',
        get_theme_file_uri('assets/theme/bootstrap-icons/bootstrap-icons.css')
    );
    wp_register_style(
        'g_theme',
        get_theme_file_uri('assets/theme/public/index.css')
    );

    wp_enqueue_style(
        'g_font_rubik_and_pacifico'
        //to refer to the documentation for others parameters https://developer.wordpress.org/reference/functions/wp_enqueue_style/
        );
    wp_enqueue_style(
        'g_bootstrap_icons'
    );
    wp_enqueue_style(
        'g_theme'
    );
    
    
}