<?php 

/**
 * Displays meta data for the secondary blog loop items on the blog section when using the Home Page Template (template-home.php file)
 *
 * @package WordPress
 * @subpackage aluguel
 * @since 1.0
 * @version 1.0
 */

?>
	<div class="post-meta">
		<p>
			<span class="dashicons dashicons-admin-users"></span><span class="meta-info span-author"> <?php the_author_posts_link(); ?></span>
			<span class="dashicons dashicons-category"></span><span class="meta-info span-category"> <?php the_category(', '); ?></span> 
		</p>

	</div>	


	<?php 

	/* 	Whether to show thumbnails or not
	*	If the post is from an image or video post format, or is a simple post template, don't show anything
	*	If the post doesn't have thumbnail, show a default image
	*	
	*/

	?>
	<?php if( has_post_thumbnail() ): ?>

		<?php if( (!is_single()) && ( !get_post_format() == 'image'  || !get_post_format() == 'video') ): ?>

			<div class="aluguel-thumbnail">
				<a class="post-thumbnail" title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>			
				</a>		
			</div>

			<span class="dashicons dashicons-calendar-alt"></span> 
			<a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>">
				<?php the_time( get_option( 'date_format' ) ); ?>				
			</a>			

		<?php endif; ?>

	
		
	<?php endif; ?>