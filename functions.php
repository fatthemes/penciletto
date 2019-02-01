<?php
/**
 * Penciletto functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package penciletto
 */

/**
 * Enqueue parent styles.
 */
function penciletto_parent_style() {
	wp_enqueue_style( 'pencil-parent-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'pencil' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'penciletto_parent_style', 5 );

/**
 * Enqueue scripts.
 */
function penciletto_scripts() {
	
	wp_dequeue_script( 'masonry' );
	wp_dequeue_script( 'theia-sticky-sidebar' );
	wp_dequeue_script( 'magnific-popup' );
	wp_dequeue_script( 'pencil-scripts' );
	wp_enqueue_script( 'penciletto-scripts', get_stylesheet_directory_uri() . '/js/penciletto.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ) );

	$penciletto_home_page_slider_play_speed = get_theme_mod( 'home_page_slider_play_speed', 0 );
	$penciletto_home_page_slider_autoplay = ( 0 == $penciletto_home_page_slider_play_speed ) ? false : true;
	wp_localize_script(
		'penciletto-scripts',
		'penciletto',
		array(
			'home_page_slider_img_number' => get_theme_mod( 'home_page_slider_img_number', 1 ),
			'home_page_slider_play_speed' => $penciletto_home_page_slider_play_speed,
			'home_page_slider_autoplay' => $penciletto_home_page_slider_autoplay,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'penciletto_scripts', 20 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function penciletto_widgets_init() {
	register_sidebar(
		 array(
			 'name'          => esc_html__( 'Top', 'pencil' ),
			 'id'            => 'top-1',
			 'description'   => '',
			 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			 'after_widget'  => '</aside>',
			 'before_title'  => '<h2 class="widget-title">',
			 'after_title'   => '</h2>',
		 )
		);
}
add_action( 'widgets_init', 'penciletto_widgets_init' );

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
