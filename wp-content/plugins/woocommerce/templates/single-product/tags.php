<?php
/**
 * etiquettes
 
 WP_Term Object
(
[term_id] =>
[name] =>
[slug] =>
[term_group] =>
[term_taxonomy_id] =>
[taxonomy] =>
[description] =>
[parent] =>
[count] =>
[filter] =>
)

 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

    $terms_post = get_the_terms( $post->cat_ID , 'product_cat' );
    foreach ($terms_post as $term_cat) { 
    $term_cat_id = $term_cat->term_id; 
    
}
//photographies seulement
if($term_cat_id==16){
//the_terms( $id, $taxonomy, $before, $sep, $after );
echo '<div class="tags text-right"><i class="fas fa-tag"></i>';
$terms = the_terms('', 'product_tag','',' ','' );
echo '</div>';
}


?>
