<?php

get_header(); ?>

<?php 

if(get_field('bandeau_image') && is_product ()): ?>               
<div id="bandeau-produit" class="mx-0 mb-3" style="background-image:url(<?php  echo get_field('bandeau_image') ?>)">
                    
</div>
<?php 
    
    endif ; ?>

<div class="container" >
    <div class="row">
    <section id="primary" class="content-area col-sm-12 col-md-12">
        <main id="main" class="site-main" role="main">

            <?php woocommerce_content(); ?>

        </main><!-- #main -->
    </section><!-- #primary -->
    </div>
</div>
<?php
// get_sidebar();
get_footer();
