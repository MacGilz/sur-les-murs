<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     WooThemes
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


the_title( '<h1 class="product_title entry-title">', '</h1>' );

$photographe =  get_terms([
    'taxonomy' => 'artiste',
    'hide_empty' => false,
]);

global $wp_query;
    $terms_post = get_the_terms( $post->cat_ID , 'product_cat' );
    foreach ($terms_post as $term_cat) { 
    $term_cat_id = $term_cat->term_id; 
    }

if(in_array($term_cat_id,array('16'))){
echo '<div class="text-right artiste"><em><span class="photographe">';
echo _e('Photograph','wp-bootstrap-starter');
echo ' : </span> '.$photographe[0]->name.'</em></div>';
}



if(get_field('modele_depose')==1) echo '<div class="text-right modele-depose"> Modèle déposé &reg;</div>';


echo '<div class="text-right"><img src="/wp-content/uploads/2018/08/made-in-france.svg" width="70" height="auto" alt="fabriqué en france"/></div>'; 