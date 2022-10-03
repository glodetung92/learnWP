<?php
	if(!function_exists('glw_enqueue')){

	    function glw_enqueue(){
	    	$ver = time();
	        wp_register_style( 'glw_googlefont', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800');
	        wp_register_style( 'glw_bootstrap', THEME_URI.'/assets/css/bootstrap.min.css');
	        wp_register_style( 'glw_material_design_iconic_font', THEME_URI.'/assets/css/material-design-iconic-font.min.css');
	        wp_register_style( 'glw_custom_animate.css', THEME_URI.'/assets/css/custom-animate.css.css');
	        wp_register_style( 'glw_slick', THEME_URI.'/assets/css/slick.min.css');
	        wp_register_style( 'glw_swiper', THEME_URI.'/assets/css/swiper.min.css');
	        wp_register_style( 'glw_venobox', THEME_URI.'/assets/css/venobox.css');
	        wp_register_style( 'glw_progressbar', THEME_URI.'/assets/css/progressbar.css');
	        wp_register_style( 'glw_style', THEME_URI.'/assets/css/style.css');
	        wp_register_style( 'glw_responsive', THEME_URI.'/assets/css/responsive.css');

	        wp_enqueue_style('glw_googlefont');
	        wp_enqueue_style('glw_bootstrap');
	        wp_enqueue_style('glw_material_design_iconic_font');
	        wp_enqueue_style('glw_custom_animate');
	        wp_enqueue_style('glw_swiper');
	        wp_enqueue_style('glw_venobox');
	        wp_enqueue_style('glw_progressbar');
	        wp_enqueue_style('glw_style');
	        wp_enqueue_style('glw_responsive');

	        //js
	        wp_register_script('glw_modernizr_js', THEME_URI.'/assets/js/vendor/modernizr-2.8.3.min.js', array(), $ver);
	        wp_deregister_script( 'jquery-core' );
	        wp_register_script('jquery-core', THEME_URI.'/assets/js/vendor/jquery-1.12.4.min.js', array(), $ver, True);
	        wp_register_script('glw_bootstrap_js', THEME_URI.'/assets/js/bootstrap.min.js', array(), $ver, True);
	        wp_register_script('glw_validate_js', THEME_URI.'/assets/js/jquery.validate.min.js', array(), $ver, True);
	        wp_register_script('glw_slick_js', THEME_URI.'/assets/js/slick.min.js', array(), $ver, True);
	        wp_register_script('glw_swiper_js', THEME_URI.'/assets/js/swiper.min.js', array(), $ver, True);
	        wp_register_script('glw_isotope_js', THEME_URI.'/assets/js/isotope.pkgd.min.js', array(), $ver, True);
	        wp_register_script('glw_plugins_js', THEME_URI.'/assets/js/plugins.js', array(), $ver, True);
	        wp_register_script('glw_main_js', THEME_URI.'/assets/js/main.js', array(), $ver, True);

	        wp_enqueue_script( 'glw_modernizr_js' );
	        wp_enqueue_script( 'jquery-core');
	        wp_enqueue_script( 'glw_bootstrap_js' );
	        wp_enqueue_script( 'glw_validate_js' );
	        wp_enqueue_script( 'glw_slick_js' );
	        wp_enqueue_script( 'glw_swiper_js' );
	        wp_enqueue_script( 'glw_isotope_js' );
	        wp_enqueue_script( 'glw_plugins_js' );
	        wp_enqueue_script( 'glw_main_js' );
	    }
	}
?>