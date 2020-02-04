<?php

    function lapizzeria_setup() {
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'lapizzeria_setup');    
    
    function lapizzeria_styles() {

        //registrando estilos   
        wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '5.0');
        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');

        //llamando estilos
        wp_enqueue_style('normalize');
        wp_enqueue_style('style');

        //scripts
        wp_enqueue_script('fontawesome', get_template_directory_uri().'/js/all.js', array(), '1.0', true );
        //el true de la funcion de arriba es para que cargue el script en el footer
        wp_register_script('myscript', get_template_directory_uri().'/js/myscript.js', array(), '1.0', true );
        
        wp_enqueue_script('myscript');
        wp_enqueue_script('jquery');
    }

    add_action('wp_enqueue_scripts', 'lapizzeria_styles');

    //Creacion de menus
    function lapizzeria_menus(){
        register_nav_menus( array(
            'header-menu' => __('Header Menu', 'lapizzeria'),
            'social-menu' => __('Social Menu', 'lapizzeria')
        ));
    }

    add_action('init', 'lapizzeria_menus');
?>