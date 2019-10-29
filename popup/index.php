<?php
/* 
Plugin Name: WordPress PopUp Plugin 
Plugin URI: http://monikasls.com/
Description: This is a WordPress PopUp Plugin based on HTML5, CSS, JS and PHP
Version: 0.6.0
Author: Monika Sliesaravicute
Author: http://monikasls.com/
Licence: GPL2
*/
function plugin()
{

    $content = '';
    $content .= '<div class="plugin">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<section class="text">';
    $content .= '<form action="#">';
    $content .= '<div id="box">';
    $content .= '<p id="body-text">How to use 100% of coffee potentional?</p>';
    $content .= '</div>';
    $content .= '<div id="takeAlook">';
    $content .= '<input type="submit" value="TAKE A LOOK!" id="submitBtn" name="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_popup','plugin');

    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('Zilla slab', 'https://fonts.googleapis.com/css?family=Zilla+Slab:300,400&display=swap');
  
        wp_enqueue_style('CustomStylesheet',plugins_url('popUp/css/style.css'));
    }
