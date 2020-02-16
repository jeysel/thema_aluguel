<?php 

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress
 * @subpackage aluguel
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <?php wp_head(); ?>
    <!-- Google Analytics -->
    <script>
        (function(e,t,n,i,s,a,c){e[n]=e[n]||function(){(e[n].q=e[n].q||[]).push(arguments)}
        ;a=t.createElement(i);c=t.getElementsByTagName(i)[0];a.async=true;a.src=s
        ;c.parentNode.insertBefore(a,c)
        })(window,document,"galite","script","https://cdn.jsdelivr.net/npm/ga-lite@2/dist/ga-lite.min.js");

        galite('create', 'UA-56934340-1', 'auto');
        galite('send', 'pageview');
    </script>
</head>

<body <?php body_class(); ?>>

<header>
	<!-- INICIO TOP BAR -->
	<section class="top-bar">
		<div class="container">
			<div class="row">
				<div class="aluguel-social col-md-10 col-sm-10 col-xs-6">
					
					<?php 
					if(is_active_sidebar('aluguel-social')){
						dynamic_sidebar('aluguel-social');
					}
					?>
					
				</div>
				
 							
			</div>
		</div>
	</section>
	<!-- FIM TOP BAR -->
	<!-- Inicio Navbar Menu  "navbar navbar-inverse navbar-static-top"-->				
	<section class="menu-area">
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'aluguel_main_menu',
                                    'depth'             => 2,
                                    'container'         => false,
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                );
                            ?>
                            
                            <!-- INICIO FORM PESQUISA -->
                            <!--<div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Pesquisar por..." value="<?php the_search_query(); ?>" name="s" class="input-small search-query">
                                        <span class="input-group-btn ">
                                            <button class="btn btn-default" type="submit" value="<?php _e("Buscar", "aluguel");?>">
                                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                        </span>
                            </div>   -->           
                            <!-- FIM FORM PESQUISA -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- Fim NavBar Menu -->
    <div class="container">
        <img  class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/praia-da-pinheira-sc.png" alt="Praia da Pinheira em Santa Catarina" />


    </div>
    
</header>