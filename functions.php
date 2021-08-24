<?php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'divi', get_template_directory_uri() . '/style.css' );
      wp_enqueue_script( 'divi', plugin_dir_url( __FILE__ ) . 'js/scripts.js', array( 'jquery', 'divi-custom-script' ), '0.1.2', true );
	}

	add_action( 'wp_enqueue_scripts', 'dlspc_enqueue_styles' );
	function dlspc_enqueue_styles() {
	    wp_enqueue_style( 'dlspc-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'dlspc-slickmincss','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
		wp_enqueue_style( 'dlspc-slick-thememincss','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );
		wp_enqueue_script( 'dlspc-slickminjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',array( 'jquery' ) ,'1.0',true );
	}
?>
