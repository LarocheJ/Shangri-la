<?php 

//Load Stylesheets
function load_stylesheets(){

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');

	if(is_home() || is_author() || is_category() || is_archive){
		wp_enqueue_style('news', get_template_directory_uri().'/css/news.css');
	}
	
	if($_GET['s']){
		wp_enqueue_style('news', get_template_directory_uri().'/css/news.css');
	}

	if(is_page('accomodations')){
		wp_enqueue_style('accomodations', get_template_directory_uri().'/css/accomodations.css');
	}
	
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//Load Google Font
function add_google_fonts(){
	wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

//Load JavaScript
function loadjs(){

	wp_register_script('customjs', get_template_directory_uri() . '/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'loadjs');

// Register menus
register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme')
	)
);

//Register Widgets
function widgets(){
	register_sidebar(array(
		'name' => 'Homepage Boxes',
		'id' => 'homepage',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Category',
		'id' => 'category',
	));

	register_sidebar(array(
		'name' => 'Posts',
		'id' => 'posts',
	));
}
add_action('widgets_init', 'widgets');


add_theme_support('post-thumbnails');
?>