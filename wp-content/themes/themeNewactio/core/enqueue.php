<?php
/*
@package themeNewactio
====================
ADMIN ENQUEUE FUNCTIONS
====================
*/
function actio_load_scripts(){
    wp_register_style('actio_admin',get_template_directory_uri() . '/css/freelancer.css/',array(),'1.0.0', 'all');
    wp_enqueue_style('actio_admin');
}
/*
 STYLE DO FRONTEND
*/
 function actio_load_scripts_front(){


    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '4.6.3', 'all' );

    wp_enqueue_style( 'fontmonte', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');

    wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.7', 'all' );

    wp_enqueue_style( 'freelancer', get_template_directory_uri() . '/css/freelancer.css', array(), '3.3.7+1', 'all' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.js', array(), '3.3.7', 'all' );

     wp_enqueue_script( 'contactme', get_template_directory_uri() . '/js/contact_me.js', array(), '', true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '1.12.4', true );

    wp_enqueue_script('jqueryeasy', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '1.3', true);

    wp_enqueue_script( 'bootstrapvalidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), '1.3.6', true );

    wp_enqueue_script( 'freelancerjs', get_template_directory_uri() . '/js/freelancer.js', array('jquery'), '3.3.7+1', true );



 }
 add_action( 'wp_enqueue_scripts', 'actio_load_scripts_front');

