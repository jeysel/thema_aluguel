<?php 

/**
 * The template for displaying 404 pages
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

					<div class="error404 col-md-9">

					<header>
						<h1><?php _e( 'Page not found' , 'aluguel' ) ?></h1>
						<p><?php _e( "Unfortunately, the page you tried to access doesn't exist on this site" , 'aluguel' ) ?></p>
					</header>

					<div class="error">
					
						<p><?php _e( 'What about doing a quick search?' , 'aluguel' ) ?></p>
						<?php get_search_form(); ?>

						<?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => __( 'Latest Posts' , 'aluguel' ) , 'number' => 3 ) ); ?>

					</div>


					</div>
				</div>
			</div>
		</section>

	</main>	
</div>
<?php get_footer(); ?>
