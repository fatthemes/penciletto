<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penciletto
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'penciletto' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
				
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php the_custom_logo(); ?>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'penciletto' ); ?></button>
						<div class="nav-func">
						<?php
						$penciletto_social_icons_twitter = get_theme_mod( 'social_icons_twitter' );
						$penciletto_social_icons_facebook = get_theme_mod( 'social_icons_facebook' );
						$penciletto_social_icons_googleplus = get_theme_mod( 'social_icons_googleplus' );
						$penciletto_social_icons_instagram = get_theme_mod( 'social_icons_instagram' );
						$penciletto_social_icons_pinterest = get_theme_mod( 'social_icons_pinterest' );
						$penciletto_social_icons_youtube = get_theme_mod( 'social_icons_youtube' );
						$penciletto_social_icons_tumblr = get_theme_mod( 'social_icons_tumblr' );
						?>
						<?php
						if ( ! empty( $penciletto_social_icons_twitter ) ) :
							?>
<a href="<?php echo esc_url( $penciletto_social_icons_twitter ); ?>"><span class="fa fa-twitter fa-lg"></span></a><?php endif; ?>
						<?php
						if ( ! empty( $penciletto_social_icons_facebook ) ) :
							?>
<a href="<?php echo esc_url( $penciletto_social_icons_facebook ); ?>"><span class="fa fa-facebook fa-lg"></span></a><?php endif; ?>
						<?php
						if ( ! empty( $penciletto_social_icons_googleplus ) ) :
							?>
<a href="<?php echo esc_url( $penciletto_social_icons_googleplus ); ?>"><span class="fa fa-google-plus fa-lg"></span></a><?php endif; ?>
						<?php
						if ( ! empty( $penciletto_social_icons_instagram ) ) :
							?>
<a href="<?php echo esc_url( $penciletto_social_icons_instagram ); ?>"><span class="fa fa-instagram fa-lg"></span></a><?php endif; ?>
						<?php
						if ( ! empty( $penciletto_social_icons_pinterest ) ) :
							?>
<a href="<?php echo esc_url( $penciletto_social_icons_pinterest ); ?>"><span class="fa fa-pinterest fa-lg"></span></a><?php endif; ?>
						<?php
						if ( ! empty( $penciletto_social_icons_youtube ) ) :
							?>
<a href="<?php echo esc_url( $penciletto_social_icons_youtube ); ?>"><span class="fa fa-youtube fa-lg"></span></a><?php endif; ?>
<?php
if ( ! empty( $penciletto_social_icons_tumblr ) ) :
	?>
<a href="<?php echo esc_url( $penciletto_social_icons_tumblr ); ?>"><span class="fa fa-tumblr fa-lg"></span></a><?php endif; ?>
						<button class="search-toggle fa fa-search"></button>
						</div>
						<div id="toggled-navbar-bg" >
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id' => 'primary-menu',
					'container_class' => 'primary-menu',
					'menu_class' => 'primary-menu',
				)
			);
			?>
						</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
		<?php if ( is_home() ) : ?>
			
			<?php get_template_part( 'template-parts/content', 'home-slider' ); ?>
		
		<?php endif; ?>
	<?php get_sidebar( 'top' ); ?>
	<div id="content" class="site-content container">
		
