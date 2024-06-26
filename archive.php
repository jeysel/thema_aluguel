<?php 

/**
 * The template for displaying archive pages
 *
  * @package WordPress
 * @subpackage aluguel
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content' , 'header' ); ?>

<div class="aluguel-inner-content">
	<main>
		<section class="aluguel-content">
			<div class="container">
				<div class="row">

					<div class="archive col-md-9">

						<?php 

						the_archive_title('<h1 class="archive-title">','</h1>');
						the_archive_description();

						if(have_posts()) :
								while (have_posts()) : the_post(); 

									get_template_part('template-parts/content', 'archive'); 
 
								endwhile;		
						?>

							<div class="aluguel-pagination col-md-6 col-sm-6 col-xs-6 text-left">
								<?php previous_posts_link( __( '&#8249;&#8249; Newer posts ', 'aluguel' ) ); ?>
							</div>						


							<div class="aluguel-pagination col-md-6 col-sm-6 col-xs-6 text-right">
								<?php next_posts_link( __( 'Older posts &#8250;&#8250;', 'aluguel' ) ); ?>
							</div>	


						<?php 
						else: 
							get_template_part( 'template-parts/content' , 'none' );
						endif; 
						?>


					</div>
					<aside class="aluguel-sidebar col-md-3">
						<?php get_sidebar('blog'); ?>
					</aside>
				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>
