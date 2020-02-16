<?php 

/**
 * Displays the content of a single post
 *
 * @package WordPress
 * @subpackage aluguel
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php edit_post_link( __( 'Edit this page' , 'aluguel' ), '<p>', '</p>' ); ?>	
		
	<header>
		<h1><?php the_title(); ?></h1>
		<?php get_template_part( 'template-parts/content' , 'article-header' ); ?>
	</header>	

	<div class="content">
		<?php 

		// Gancho para um banner aleatório
		do_action( 'aluguel_random_banner' );

		the_content(); 

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'aluguel' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'aluguel' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );

		?>

	</div>


</article>