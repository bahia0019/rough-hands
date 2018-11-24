<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rough_Hands
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script type="text/javascript">
	jQuery(document).ready(function($){

		/* toggle nav */
		$(".menu-toggle").on("click", function(){
			$("#mobile-navigation").slideToggle();
			$(this).toggleClass("active");
		});

	});
</script>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rough-hands' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'rough-hands' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'left-menu',
			) );
			?>
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style="fill:#fff;" src="http://roughhands.local/wp-content/uploads/2018/11/logo_long@2x.png"></a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'right-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<nav id="mobile-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
	</nav>

	<div id="content" class="site-content">
