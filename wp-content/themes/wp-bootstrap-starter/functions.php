<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

/*
    the_breadcrumb () 
    affiche_date_event($in,$out)
    the_content_limit($content,$max_char);

*/


if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
    // fontawesome cdn
    wp_enqueue_style( 'wp-bootstrap-pro-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
//  wp_enqueue_style( 'hover-style-css', get_template_directory_uri() . '/css/hover.css' );
    
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700 ' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700|Tangerine' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
    //Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );


function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



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
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}


function the_breadcrumb () {

//page sans contenus servant de noeud dans l'arborescence et ne pouvant être cliquables
$pageNoLink =array();

// Settings
$separator = '<i class="fa fa-angle-right"></i>';
$id = 'breadcrumbs';
$class = 'breadcrumbs';
$home_title = 'Accueil';

// Get the query & post information
global $post,$wp_query;
$category = get_the_category();

// Build the breadcrums
echo '<nav class="hidden-xs">
<ul id="' . $id . '" class="' . $class . '">';

// Do not display on the homepage
if ( !is_front_page() ) {

// Home page
// echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
// echo '<li class="separator separator-home"> ' . $separator . ' </li>';

if ( is_single() ) {
if(get_post_type($post->ID)=='pec-events'){

echo '<li class="item-cat item-cat-' . $category[0]->term_id . ' "><a class="bread-cat bread-cat-conseils-municipaux bread-cat-conseils-municipaux" href="/nangis-pratique/agenda-des-evenements-de-la-ville-de-nangis/" title="Agenda ville de Nangis">Agenda</a></li>';

}

// Single post (n'affiche que la première categorie)
if($category[0]->category_nicename=='conseils-municipaux'){
echo '<li class="item-parent item-parent-270 breadcrumb_270"><em>Vie municipale</em></li><li class="separator separator-270"> <i class="fa fa-angle-right"></i> </li><li class=" item-cat item-cat-' . $category[0]->term_id . ' "><a class="breadcrumb_270 bread-cat bread-cat-conseils-municipaux bread-cat-conseils-municipaux" href=" http://ville-nangis.fr/vie-municipale/comptes-rendus/comptes-rendus-conseil-municipal/" title="vie municipale conseils-municipaux ">Comptes rendus</a></li>';
}
else{
echo '<li class="item-cat item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '" href="' . get_category_link($category[0]->term_id ) . '" title="' . $category[0]->cat_name . '">' . $category[0]->cat_name . '</a></li>';
}
echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
echo '<li class="item-current item-' . $post->ID . '"><em class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</em></li>';

} else if ( is_category() ) {

// Category page
echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><em class="bread-current bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '">' . $category[0]->cat_name . '</em></li>';

} else if ( is_page() ) {

// Standard page
if( $post->post_parent ){

// If child page, get parents
$anc = get_post_ancestors( $post->ID );

// Get parents in the right order
$anc = array_reverse($anc);

// Parent page loop
foreach ( $anc as $ancestor ) {

if(in_array( $ancestor, $pageNoLink)) {


$parents .= '<li class="item-parent item-parent-' . $ancestor . ' breadcrumb_' . $ancestor . '" ><em>' . get_the_title($ancestor) . '</em></li>';
$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';

}else {
$parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';


}
}

// Display parent pages
echo $parents;

// Current page
echo '<li class="item-current item-' . $post->ID . '"><em title="' . get_the_title() . '"> ' . get_the_title() . '</em></li>';

} else {

// affichage page si pas de parent
//echo '<li class="item-current item-' . $post->ID . '"><em class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</em></li>';

}

} else if ( is_tag() ) {

// Tag page

// Get tag information
$term_id = get_query_var('tag_id');
$taxonomy = 'post_tag';
$args ='include=' . $term_id;
$terms = get_terms( $taxonomy, $args );

// Display the tag name
echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><em class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</em></li>';

} elseif ( is_day() ) {

// Day archive

// Year link
echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

// Month link
echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

// Day display
echo '<li class="item-current item-' . get_the_time('j') . '"><em class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</em></li>';

} else if ( is_month() ) {

// Month Archive

// Year link
echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

// Month display
echo '<li class="item-month item-month-' . get_the_time('m') . '"><em class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</em></li>';

} else if ( is_year() ) {

// Display year archive
echo '<li class="item-current item-current-' . get_the_time('Y') . '"><em class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</em></li>';

} else if ( is_author() ) {

// Auhor archive

// Get the author information
global $author;
$userdata = get_userdata( $author );

// Display author name
echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><em class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</em></li>';

} else if ( get_query_var('paged') ) {

// Paginated archives
echo '<li class="item-current item-current-' . get_query_var('paged') . '"><em class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</em></li>';

} else if ( is_search() ) {

// Search results page
echo '<li class="item-current item-current-' . get_search_query() . '"><em class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</em></li>';

} elseif ( is_404() ) {

// 404 page
echo '<li>' . 'Error 404' . '</li>';
}

}

echo '</ul>

</nav>';

}

// si ddate debut == fin , on affiche que début
function affiche_date_event($in,$out){
    
    
    if($in==$out){
        return '<p>Le '.$out.'</p>';
    }
    else{
        
        return '<p>Du '.$in. ' au '.$out.'</p>';
    }
    
    
}


function the_content_limit($content,$max_char) {
    $content = str_replace(']]>', ']]&gt;', $content);

   if (strlen($_GET['p']) > 0) {
      echo "<p>".$content."</p>";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "<p>".$content." ...</p>";
   
    echo "<p class=\"plusinfos\">";
        echo "<a href='";
        the_permalink();
        echo "'>";
    _e('(more...)');
    echo "</a></p>";
   }
   else {
      echo $content;
   }
}



// Fonction de recuperation des actualités 
// paramètre ( slug catégorie; nombre de posts; Rubrique ACF - si nul tous; )
function get_post_actualites(
    $cat,$stickyOnly=true,
    $postperpage=1,
    $nopagination=false,
    $acf_rubriques='', 
    $thumbW=360, 
    $thumH=250, 
    $thumbBoxClass="w100",
    $showcategories=false) {
  
$query = new WP_Query( $args );    
   
//arguments de requeten WP_Query
    $args = array(
    'category_name' => $cat,//le slug
	'posts_per_page' => $postperpage,
	'nopaging'		=> $nopagination,
	'meta_query' => $meta_rub,
    'orderby' => 'date',   
    'order' => 'DESC'   
);  
    
    
    if($stickyOnly){
    $sticky = get_option( 'sticky_posts' );// array tous les articles mise en avant
        
    $args+= ['post__in' => $sticky];
    $args+= ['ignore_sticky_posts' => 1];
    }
	   
    
    // mod requete pour filtrer sur rubrique $cat
    $meta_rub[]=array();
    if(!empty($acf_rubriques)){
    $meta_rub[] = array(
        'key'     => 'rubriques',
        'value'   => '"'.$acf_rubriques.'"',
        'compare' => 'LIKE',
    );
    }

    
    $query = new WP_Query($args); 

   // print_r($query);
    //
    if ( $query->have_posts() ) {

        while ( $query->have_posts() ) {

            $query->the_post();

            echo '<div class="items-actualites">
            <a href="';
            echo the_permalink();
            echo '" >';
            
            echo '<h2>';
            the_title();
            echo '</h2>
            </a>';
            
            if($showcategories){ echo the_category();} //affichage categorie sur parametre
            
            if ( has_post_thumbnail() ){
                //attributs vignette
                $attr = array(
                    'class' => "img-fluid hvr-bounce-in mb-4",
                    'alt'   =>get_the_title()
                );
                
            echo '<a href="';
            echo the_permalink();
            echo '" >';
            
            echo '<div class="'.$thumbBoxClass.'">';
            the_post_thumbnail(array($thumbW, $thumbH),$attr);
            echo '</div>'; 
            echo '</a>';
            }
           
            
           if($cat=='evenements') echo affiche_date_event(get_field('date_de_debut'), get_field('date_fin'));
            
           echo get_field('resume');
         
           echo '<div class="date_insert text-right w100"><p>Posté le : ';
            the_date();
           echo '</p></div>';
           echo get_the_tag_list('<p class="tags">', ', ','</p>');
           echo '</div>';
        }
    }
    
}
// 1.0  06.02.2016  ERAZ !!
function posts_actu($cat,$itemsPerPage) {
   global $post;
   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
   
    $query_args  = array(
			'post_type' => 'post',
			'post_cat' => $cat,
			'orderby' => 'date',
			'posts_per_page' => $itemsPerPage,
			 'order' => 'DESC',
			 'paged' => $paged
			);
			
	$the_query = new WP_Query( $query_args );
			

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop
 echo '<article>';

	 
			echo '
			<div class="col-xs-12 col-sm-6 col-md-6 item">
            <h2>';
            echo the_title();
            echo '</h2>' .
			the_post_thumbnail('thumbnail') ;
			
            echo get_excerpt(250);
			echo '
            <div class="row marginTop15">
              <div class="col-xs-6">
                <p class="date">';
			echo  the_date();
			echo '</p>
              </div>
              <div class="col-xs-6  text-right "> <a href="';
			  echo the_permalink();
			  echo '"><i class="fa fa-chevron-right fa-4x"></i></a> </div>
            </div>
            </div> 
			</article>';
		endwhile;
		endif;
		
	if ($the_query->max_num_pages > 1) { 
		// check if the max number of pages is greater than 1 
	echo '
		
		<div class="col-xs-12 pagination">
		<nav>
    	<div class="prev-posts-link">';
    echo get_next_posts_link( 'Actualités précédentes <i class="fa fa-chevron-right"></i>', $the_query->max_num_pages ); // display older posts link ;
   echo '</div>
    <div class="next-posts-link">';
      echo get_previous_posts_link( '<i class="fa fa-chevron-left"></i> Actualités plus réçentes' ); // display newer posts link 
    echo '</div>
  		</nav>
		</div>
  		';
		}
		
		wp_reset_postdata();

}
add_action( 'pre_get_posts', 'my_post_queries' );


function kbs_register_taxonomies() {
	
		$taxonomies = array(
            
           array(
				'slug'         => 'artiste',
				'single_name'  => 'Artiste',
				'plural_name'  => 'Artistes',
				'post_type'    => 'post',
                 'new'          => 'Nouvel',
                'hierarchical' => false,
                'menu_name'    => 'Artistes',
			),
		);
	
		foreach( $taxonomies as $taxonomy ) {
			$labels = array(
				'name' => $taxonomy['plural_name'],
				'singular_name' => $taxonomy['single_name'],
				'search_items' =>  'Recherche ' . $taxonomy['plural_name'],
				'all_items' => 'Tout ' . $taxonomy['plural_name'],
				'parent_item' => 'Parent ' . $taxonomy['single_name'],
				'parent_item_colon' => 'Parent ' . $taxonomy['single_name'] . ':',
				'edit_item' => 'Modifier ' . $taxonomy['single_name'],
				'update_item' => 'Mettre à jour ' . $taxonomy['single_name'],
				'add_new_item' => 'Ajouter ' . $taxonomy['single_name'],
				'new_item_name' => $taxonomy['new'].' ' . $taxonomy['single_name'] . ' Nom',
				'menu_name' => $taxonomy['menu_name'],
                'meta_box_cb' => false,
			);
			
			$rewrite = isset( $taxonomy['rewrite'] ) ? $taxonomy['rewrite'] : array( 'slug' => $taxonomy['slug'] );
			$hierarchical = isset( $taxonomy['hierarchical'] ) ? $taxonomy['hierarchical'] : true;
		
			register_taxonomy( $taxonomy['slug'], $taxonomy['post_type'], array(
				'hierarchical' => $hierarchical,
				'labels' => $labels,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => $rewrite,
			));
		}
		
	}
	add_action( 'init', 'kbs_register_taxonomies' );






/**
* Supprime les fonctions inutiles de l'entête
*/
add_action('init', 'clean_head');
function clean_head () {
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'feed_links', 2 ); // Affiche les liens des flux RSS pour les Articles et les commentaires.
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Affiche les liens des flux RSS supplémentaires comme les catégories de vos articles.
remove_action( 'wp_head', 'rsd_link' ); // Affiche le lien RSD (Really Simple Discovery). Je ne l'ai jamais utilisé mais si vous êtes certain d'en avoir besoin, laissez-le.
remove_action( 'wp_head', 'wlwmanifest_link' ); // Affiche le lien xml dont a besoin Windows Live Writer pour accéder à votre blog. Si vous ne publiez pas vos articles avec ce logiciel, il ne vous sert à rien.
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // Affiche les liens relatifs vers les articles suivants et précédents. (<kbd> <link title=" href=" rel="prev" /></kbd> et <kbd> <link title="" href=""" rel="next" /></kbd>). Ces liens peuvent parfois affecter votre SEO.

remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // Affiche l'url raccourcie de la page ou vous vous situez.

/**
* On en profite pour supprimer le style en trop ajouté par le widget "Commentaires récents"
*/
global $wp_widget_factory;
remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
}

/*===============
WOOCOMMERCE
================*/

/*retrait filtre*/
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

//remplace exerpt par content
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'the_content', 20 );

// retirer zone meta
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

add_filter( 'woocommerce_breadcrumb_defaults', 'wpm_woocommerce_breadcrumbs' );


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// template avec etiquettes dans single product
if ( ! function_exists( 'woocommerce_template_tags' ) ) {
	function woocommerce_template_tags() {
		wc_get_template( 'single-product/tags.php' ); //tags template
	}
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_tags', 20 );




// modification breadcrumb
function wpm_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' <i class="fal fa-angle-right"></i> ',
            'wrap_before' => '<nav class="woocommerce-breadcrumb text-right" itemprop="breadcrumb">', // Modifie la balise HTML ouvrant le fil d'ariane
            'wrap_after'  => '</nav>', // Modifie la balise HTML fermant le fil d'ariane
            'before'      => '', // Ajoute une chaine de caractère avant chaque item du fil d'ariane
            'after'       => '', // Ajoute une chaine de caractère après chaque item du fil d'ariane
            'home'        => _x( '', 'breadcrumb', 'woocommerce' ), // Modifiez ici le texte "Accueil" rien == pas de home
        );
}

//deplacer infos aditionnelles
function woocommerce_template_product_additional_information() {
wc_get_template( 'single-product/tabs/additional-information.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_additional_information', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_product_additional_information', 15 );



/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

// mod thumbnail
if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
        global $post, $woocommerce;
        $output = '<div class="mx-auto">';
        if ( has_post_thumbnail() ) {               
            $output .= get_the_post_thumbnail( $post->ID,$size, array( 'class' => 'img-thumbnail' ) );              
        }                       
        $output .= '</div>';
        return $output;
    }
}

/**
 * Template pages
 */

if ( ! function_exists( 'woocommerce_content' ) ) {

	function woocommerce_content() {

		if ( is_singular( 'product' ) ) {

			while ( have_posts() ) :
				the_post();
				wc_get_template_part( 'content', 'single-product' );
			endwhile;

		} else {
			?>

			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

				<h1 class="entry-title text-center"><?php woocommerce_page_title(); ?></h1>

			<?php endif; ?>

			<?php do_action( 'woocommerce_archive_description' ); ?>

			<?php if ( woocommerce_product_loop() ) : ?>

				<?php do_action( 'woocommerce_before_shop_loop' ); ?>

				<?php woocommerce_product_loop_start(); ?>

				<?php if ( wc_get_loop_prop( 'total' ) ) : ?>
					<?php while ( have_posts() ) : ?>
						<?php the_post(); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php do_action( 'woocommerce_after_shop_loop' ); ?>

			<?php else : ?>

				<?php do_action( 'woocommerce_no_products_found' ); ?>

			<?php
			endif;

		}
	}
}


/*===============
ADMIN CONFIG
================*/

function admin_css() {

$admin_handle = 'admin_css';
$admin_stylesheet = get_template_directory_uri() . '/css/admin.css';

wp_enqueue_style( $admin_handle, $admin_stylesheet );
}
add_action('admin_print_styles', 'admin_css', 11 );


/**
* On supprime les widgets inutiles du dashboard WordPress
*/
function clean_dashboard_widgets() {
remove_meta_box('dashboard_plugins', 'dashboard', 'normal'); // Plugins populaires
remove_meta_box('dashboard_primary', 'dashboard', 'normal'); // Feed du Blog WordPress.org
remove_meta_box('dashboard_secondary', 'dashboard', 'normal'); // Des news de WordPress
remove_meta_box('dashboard_quick_press', 'dashboard', 'normal'); // Publiez rapidement un article
remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal'); // Vos récents brouillons
remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal'); // Liens entrants
}
add_action('admin_init', 'clean_dashboard_widgets');


/*desactive alerte mise a jour WP*/
if ( !current_user_can( 'edit_users' ) ) {
add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}