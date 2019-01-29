<?php
/*
Plugin Name: Think2make Corporate Style
Plugin URI: https://github.com/think2make/think2make-corporate-style
Description: Cette extension redéfinit le CSS du thème, p.ex. les couleurs des liens.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
GitHub Plugin URI: https://github.com/think2make/think2make-corporate-style
*/
 
function load_think2make_styles() {
	
  // 1) Charger le style CSS pour Infini

	wp_enqueue_style( 
		'think2make-corporate', 
		plugin_dir_url( __FILE__ ) . 'style.css',
		array( 'corporate-pro' ), // dependencies
		'0.2' // version
	); 
        
}
add_action( 'wp_enqueue_scripts', 'load_think2make_styles', 10 );