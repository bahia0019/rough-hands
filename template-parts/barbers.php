<?php 

// the query
$the_query = new WP_Query( 
	array(
        'post_type'      => 'barber',
        'posts_per_page' => 3,
    )
); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->
	<div class="barbers">
		<!-- the loop -->

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="barber">
					<?php the_post_thumbnail( 'thumbnail', [ 'class' => 'barber-thumb' ] ); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_excerpt(); ?>
					<div class="x-separator"></div>
					<i>Years of experience</i>
					<?php 
					$current_year = date("Y");
					$year_started = get_field( 'year_started' ); 

					$years_experience =  $current_year - $year_started;
					if( $years_experience > 10 ){
						echo '10+';
					}else{
						echo $years_experience;
					}
					?>
					<i>Contact:</i>
					<a href="#"><?php the_field( 'email' ); ?></a>
				</div>
			<?php endwhile; ?>

		<!-- end of the loop -->
	</div>
	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>