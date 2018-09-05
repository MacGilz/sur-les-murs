<?php
/**
 * Template Name: Actualités
 */
$rubriques= get_field('rubriques');

get_header(); ?>

	<section id="primary" class="content-area col-12">
		<main id="main" class="site-main" role="main">


			<?php
            
            

            
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->
<section id="primary" class="content-area col-12">
<div class="row">

<div class="col-12 col-sm-4">
    <h2>Réseau</h2>
            <?php
            
            get_post_actualites ('reseau',true);
            
            ?>
</div>
<div class="col-12 col-sm-4">
    <h2>Au Fil de L'eau</h2>
            <?php
            
            get_post_actualites ('au-fil-de-leau',true);
    
            if(empty(get_post_actualites ('au-fil-de-leau',true))) get_post_actualites ('au-fil-de-leau',false) ;
    
    
            
            ?>
</div>
<div class="col-12 col-sm-4">
    <h2>Evenement</h2>
            <?php
            
            get_post_actualites ('evenements');
            
            ?>
</div>
</div>
</section>           

<?php
//get_sidebar();
get_footer(); ?>