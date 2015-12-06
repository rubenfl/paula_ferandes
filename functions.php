<?php
/**
 * paula_fernandes functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package paula_fernandes
 */

if ( ! function_exists( 'paula_fernandes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function paula_fernandes_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on paula_fernandes, use a find and replace
	 * to change 'paula_fernandes' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'paula_fernandes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'paula_fernandes' ),
	) );
	//my code

//end

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'paula_fernandes_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // paula_fernandes_setup
add_action( 'after_setup_theme', 'paula_fernandes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function paula_fernandes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'paula_fernandes_content_width', 640 );
}
add_action( 'after_setup_theme', 'paula_fernandes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function paula_fernandes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'paula_fernandes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'paula_fernandes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function paula_fernandes_scripts() {
	wp_enqueue_style( 'paula_fernandes-style', get_stylesheet_uri() );

	wp_enqueue_script( 'paula_fernandes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'paula_fernandes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'paula_fernandes_scripts' );
/*my code*/


/* end */

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/*my code*/
 function myFunction() {
 global $wpdb;
 $copyright_dates = $wpdb->get_results("
 SELECT
 YEAR(min(post_date_gmt)) AS firstdate,
 YEAR(max(post_date_gmt)) AS lastdate
 FROM
 $wpdb->posts
 WHERE
 post_status = 'publish'
 ");
 $output = '';
 if($copyright_dates) {
 $copyright = "© " . $copyright_dates[0]->firstdate;
 if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
 $copyright .= '-' . $copyright_dates[0]->lastdate;
 }
 $output = $copyright;
 }
 return $output;
 }
 /*end*/

function customSidebar(){

for ($i=0; $i<5 ; $i++) {
	echo 'Paula Fernandes, the best Brazilian Singer in the world, she is beaitiful, and her songs are amazing';
	echo '<br>';
		
}

}




					

				
				
				
 
 
 




