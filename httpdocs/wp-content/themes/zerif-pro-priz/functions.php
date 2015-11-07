<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 06/11/15
 * Time: 21.18
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}