<div class="container ">


      <div class="row mb-5">

           <div class="col-12 reveal  text-center">
               <h1 class="underline-small"><?php _e('Sur les murs ','wp-bootstrap-starter'); ?> | <?php _e('Unique Walls','wp-bootstrap-starter'); ?></h1>
            </div>

 <div class="row mt-2 mb-5 filigram">
<div class="col-12 col-md-6 reveal d-flex flex-column text-justify" >
          <?php echo get_field('texte_intro_colonne_gauche')?>
    </div>
<div class="col-12 col-md-6 reveal d-flex flex-column text-justify" >
          <?php echo get_field('texte_intro_colonne_droite') ?>
    </div>
</div>
    </div>
        <div class="row mb-5">
           <div class="col-12 reveal  text-center">
               <h1 class=" underline-small"><?php _e('The Shop','wp-bootstrap-starter'); ?></h1>
            </div>
        </div>
        <div class="row ">

           <div class="col-12 col-md-3 reveal categorie d-flex flex-column" >
               <a href="<?php echo get_field('url_photographies') ?>" title="boutique <?php echo get_field('titre_photographies') ?> ">
               <div class="">
                    <img src="<?php  echo get_field('image_photographies') ?>" class="d-block img-fluid" alt="<?php echo get_field('titre_photographies') ?>" />
                    </div>
               <h3 class="text-center mt-2"><?php echo get_field('titre_photographies') ?></h3>
               </a>

            </div>
           <div class="col-12 col-md-3 reveal categorie d-flex flex-column" >
               <a href="<?php echo get_field('url_bas_reliefs') ?>" title="boutique <?php echo get_field('titre_bas_reliefs') ?> ">
               <div class="">
                    <img src="<?php  echo get_field('image_bas_reliefs') ?>" class="d-block img-fluid" alt="<?php echo get_field('titre_bas_reliefs') ?>"/>
                    </div>
               <h3 class="text-center mt-2"><?php echo get_field('titre_bas_reliefs') ?></h3>
               </a>

            </div>
            <div class="col-12 col-md-3 reveal categorie d-flex flex-column" >
               <a href="<?php echo get_field('url_tete_lit') ?>" title="boutique <?php echo get_field('titre_tete_lit') ?> ">
               <div class="">
                    <img src="<?php  echo get_field('image_tete_lit') ?>" class="d-block img-fluid" alt="<?php echo get_field('titre_tete_lit') ?>"/>
                    </div>
               <h3 class="text-center mt-2"><?php echo get_field('titre_tete_lit') ?></h3>
               </a>

            </div>

    </div>





<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<script language="javascript">
    ( function () {

        var config = {
            enter: 'bottom',
            wait: '0.3s',
            viewFactor: 0.15,
            duration: 800,
            distance: "50px",
            scale: 0.8,
        }

        window.sr = new ScrollReveal( config )
    } )()

    sr.reveal( '.h2reveal' );
    sr.reveal( '.reveal' );
</script>