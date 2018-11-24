<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rough_Hands
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero">

				<img src="http://roughhands.local/wp-content/uploads/2018/11/bg_home.jpg" />

				<div class="hero-content"> 
					<h1 class="hero-large"><?php the_field( 'hero_large_text' ); ?></h1>
					<p class="hero-medium"><?php the_field( 'hero_medium_text' ); ?></p>
					<a href="#" class="button"><?php the_field( 'hero_button_text' ); ?></a>
				</div>

			</div>
			<?php get_template_part( 'template-parts/features' ); ?>

			<div class="divider"></div>

			<h2 class="section">Proud at what we do</h2>
			<?php get_template_part( 'template-parts/carousel' ); ?>

			<div class="divider"></div>

			<h2 class="section">who will do the work?</h2>
			<?php get_template_part( 'template-parts/barbers' ); ?>

			<div class="divider"></div>

			<h2 class="section">Spend some money</h2>
				<?php echo do_shortcode( '[products]' ); ?>
			<div class="divider"></div>

			<h2 class="section">Sign up for special deals</h2>
			<?php get_template_part( 'template-parts/signup-form' ); ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
