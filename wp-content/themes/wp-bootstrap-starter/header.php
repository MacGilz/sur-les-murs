<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>

	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div id="bandeau-top" class="ombre-inset">
            <div class="container">
                <div class="row">
            <div class="col-11">
               <div class="telephone float-right"><i class="fal fa-phone-volume"></i> 01 46 46 46 55 33</div>
            </div>
            <div class="col-1 ml-auto">
            <?php do_action('wpml_add_language_selector'); ?>
             </div>
                    </div>
            </div>
        </div>
        <div id="bandeau" class="container " >
             <div class="row ">             
                 <div class="navbar-brand col-sm-2 col-md-2 px-2">
                 
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                           <?php  include "logo-slm-noir-sstt.php" ?>                            
                        </a>
</div>
                 <div class=" d-flex flex-column col-12 col-md-8 mt-0 text-center">
                     <a href="<?php echo esc_url( home_url( '/' )); ?>" class="header-tt-link">
                     <img src="/wp-content/uploads/2018/08/sur-les-murs-tt.svg" alt="Sur les murs" id="surlesmurs-svg" class="mb-0" ></a>
                     <p class="headline text-center mt-0">Unique Walls</p>  
                     
                <div class="row">
                    <div class="col-12">
                <nav class="navbar navbar-expand-xl p-0">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
                        </div>
                    </div>
                 </div>
                 
                 <div class="col-12 col-md-2">
                 </div>
                 

           
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
