<?php

    add_action( 'wp_enqueue_scripts', 'enqueue_custom_things' );

    function enqueue_custom_things() {
        // Enqueue bootstrap styles
        // wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css' );

        // Enqueue bootstrap styles
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/custom.css' );

        // Enqueue parent styles
        wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

        // Enqueue bootstrap JS
        wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', array( 'jquery' ),null ,true );

        // Enqueue Custom JS
        wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri().'/js/theme.js', array( 'jquery' ), null ,true );
    }
