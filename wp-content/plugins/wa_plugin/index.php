<?php


/*
Plugin Name: WordPress August Plugin
Plugin URI:  https://swisacademy.eu
Description: Plugin
Version:     0.1
Author:      Cornel
Author URI:  https://swisacademy.eu
*/


/* shortcode doar un cuvant */

add_shortcode('imagine_banner','wa_image'); 
add_filter('wp_title','wa_title');
add_filter('the_content','wa_semnatura');

function wa_image() {
    echo '<img src="http://placehold.it/350x150">';
}

function wa_title() {
    echo 'Titlu nou';
}

function wa_semnatura($content) {
    echo $content.'<b>by Mini Me</b>';
}




