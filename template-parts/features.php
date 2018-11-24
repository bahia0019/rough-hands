<?php

// check if the repeater field has rows of data
if( have_rows('features') ): ?>

	<div class="features">

	<?php while ( have_rows('features') ) : the_row(); ?>
		<div class="feature">
			<img src="<?php the_sub_field('icon'); ?>"/>
			<h3><?php the_sub_field('title'); ?></h3>
			<?php the_sub_field('content'); ?>
		</div>
	<?php endwhile; ?>

	</div>

<?php else :

    // no rows found

endif;
