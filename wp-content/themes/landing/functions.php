<?php

//aquí van todas mis funcionalidades adicionales del template

function cargar_estilos(){
	//estilos a cargar
	wp_enqueue_style('boostrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
	wp_enqueue_style('styles', get_template_directory_uri(). '/style.css', null, '1.1');
}

add_action('wp_enqueue_scripts','cargar_estilos');