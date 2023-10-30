<?php
/*
Plugin Name: Custom Menu Plugin
Description: Créer un menu avec des sous-menus pour afficher des images sans recharger la page.
Version: 1.0
Author: Votre nom
*/

function custom_menu_assets() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_script('custom-menu-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('custom-menu-style', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'custom_menu_assets');

function custom_menu_shortcode() {
    ob_start();
    ?>
    <div class="custom-menu-container">
        <ul class="custom-menu">
            <li>Présentation</li>
            <li class="has-submenu">
                Visuels
                <span class="arrow-down"><i class="fas fa-chevron-down"></i></span> <!-- flèche vers le bas -->
                <ul class="submenu">
                    <li>All</li>
                    <li>Digital Microcosm</li>
                    <li>Post Human</li>
                    <li>PCB V2</li>
                </ul>
            </li>
        </ul>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_menu', 'custom_menu_shortcode');
