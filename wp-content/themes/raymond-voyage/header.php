<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raymond-voyage
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/materialize.css" type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover/hover-min.css" type='text/css'>

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/voyage.css" type='text/css'>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'raymond-voyage' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="site-branding col l4 m12 s12">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hvr-rotate" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Raymond Voyage"></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hvr-rotate" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Raymond Voyage"></a></p>
					<?php
					endif;
					?>
				</div><!-- .site-branding -->

				<div class="col l8 m12 s12">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>

			<?php
				if ( is_front_page() ) {
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<div class="row">
						<p class="site-description col l8 offset-l2 m12 s12"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						</div>
					<?php
					endif;

					echo '<a href="' . get_post_type_archive_link( 'forfaits' ) . '" class="bouton hvr-float-shadow">Découvrez nos forfaits</a>';
				}
			?>
		</div>
	</header><!-- #masthead -->

	<?php if ( is_front_page() ) { ?>
			<div id="content" class="site-content">
	<?php }
		else { ?>
			<div id="content" class="site-content container">
	<?php } ?>

