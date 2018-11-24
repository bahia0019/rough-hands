<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rough_Hands
 */

?>

	</div><!-- #content -->
	<footer class="meta-footer">
		<div class="ill-cut-you"></div>
		<?php dynamic_sidebar( 'footer-1' ); ?>
		<?php dynamic_sidebar( 'footer-2' ); ?>
		<?php dynamic_sidebar( 'footer-3' ); ?>
		<?php dynamic_sidebar( 'footer-4' ); ?>
	</footer>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
  			
			<p class="site-credit">
				<?php 

					if ( is_front_page() ){

						printf( esc_html__( 'Website Proudly Provided by: %s.', 'padang-padang' ), '<a href="https://flauntyoursites.com/">Flaunt Your Site</a>' ); 
				}else{
						printf( esc_html__( 'Website Proudly Provided by: %s.', 'padang-padang' ), '<a href="https://flauntyoursites.com/" rel="nofollow">Flaunt Your Site</a>' );

				}?>
			</p>

		</div><!-- .site-info -->

		<!-- <?php require get_template_directory() . '/images/arrow.svg'; ?> -->
		<script>
			document.querySelector( '.scroll-to-top' ).addEventListener("click", function () {
				window.scrollTo({
				top: 0,
				behavior: "smooth"
			});
		})
		</script>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
