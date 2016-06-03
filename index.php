<?php
/*
 *Plugin name: drawContest
 *Plugin URI: http.www.monplugin.fr
 *Description: Création d'event de concours de dessin
 *Author: Dylan & Thib's
 *Author URI: https://www.kinto.xyz 
 *Version: 00
*/

/* Creation d'un nouveau type de contenu (custom post-type) */
function drawContest(){
	register_post_type('draw-contest', array(
			'labels' => array(
					'name' => __('Concour'),
					'singular_label' => __('Dessins')),
					'public' => true,
					'has_archive' => true,
					'menu_position' => 4,
					'supports' => array(
						'title',
						'thumbnail',
						'revisions'
				)
			));
}

add_action('init', 'drawContest');

//register_post_type( 'draw-contest', 'menu_icon', get_bloginfo('template_directory') . '/images/crayon.png' );