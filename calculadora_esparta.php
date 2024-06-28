<?php
/*
 * Plugin Name:       Calculadora consultiatravel.es | espartadigital.com ✴️
 * Plugin URI:        https://github.com/espartadigital
 * Description:       Calculadora viajes para consultiatravel.es // Para usar el formulario en cualquier pagina insertar en HTML: [espartaform]
 * Version:           1.0
 * Requires at least: 6.3
 * Requires PHP:      7.4
 * Author:            Esparta digital
 * Author URI:        mailto:dev@espartadigital.com
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       calculadora-esparta
*/

defined('ABSPATH') or die('Exit . . .');

function esparta_enqueue_styles() {
    wp_enqueue_style('esparta-styles', plugin_dir_url(__FILE__) . 'assets/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'esparta_enqueue_styles', 10);

function espartashow_form() {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'funciones/formulario.php');
    return ob_get_clean();
}

// registrar shortcode [espartaform]
function espartaregister_shortcode() {
    add_shortcode('espartaform', 'espartashow_form');
}
add_action('init', 'espartaregister_shortcode');