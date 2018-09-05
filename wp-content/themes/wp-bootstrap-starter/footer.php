<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?> py-5" role="contentinfo">
        
        <?php get_template_part( 'footer-widget' ); ?>
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://kingbeestudio.com" target="_blank" title="" alt="">King Bee Studio</a>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
