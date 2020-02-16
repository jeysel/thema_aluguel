<?php 

/**
 * The template for displaying the footer
 *
  * @package WordPress
 * @subpackage aluguel
 * @since 1.0
 * @version 1.0
 */


/* Getting Default Values */
$aluguel_options = wp_parse_args( 
    get_option( 'aluguel_options', array() ), 
    aluguel_get_option_defaults() 
);

?>

<?php if(is_active_sidebar( 'footer-sidebar' )): ?> 
	<section class="footer-sidebar"> 
		<div class="container">
			<div class="row">
				<?php get_sidebar('footer'); ?>
			</div>
		</div>	
	</section>
<?php endif; ?>

<footer>
	<div class="container ">
		<div class="row footer-inner">
			<div class="copyright col-md-4 col-sm-4 col-xs-12">
				<?php echo $aluguel_options['set_copyright']; ?>
			</div>
			<nav class="aluguel_footer_menu col-md-8 col-sm-8 col-xs-12 text-right">
				<?php wp_nav_menu( array(
					'theme_location' 	=> 'aluguel_footer_menu',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				    'walker'            => new WP_Bootstrap_Navwalker()
					) 
				); 
				?>
			</nav>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Raleway:400,900', 'Yanone Kaffeesatz:300,700']
    }
  });
</script>

</body>
</html>