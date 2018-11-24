<?php 
// the query
$the_query = new WP_Query( 
    array(
        'post_type' => 'styles' 
    )
); ?>


<?php if ( $the_query->have_posts() ) : ?>
    <div class="theme-carousel">
        <div class="swiper-wrapper">

        <!-- the loop -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="swiper-slide">

                    <div class="theme-carousel-slide">
                        <a href="<?php the_permalink( ); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>

            </div>

        <?php endwhile; ?>
        <!-- end of the loop -->

        </div>
        <div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-scrollbar"></div>

	</div>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<script>
    var swiper = new Swiper('.theme-carousel', {
        slidesPerView: 4,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
            slidesPerView: 4,
            spaceBetween: 40,
            },
            768: {
            slidesPerView: 3,
            spaceBetween: 30,
            },
            640: {
            slidesPerView: 2,
            spaceBetween: 20,
            },
            320: {
            slidesPerView: 1,
            spaceBetween: 10,
            }
	  	},
		scrollbar: {
    		el: '.swiper-scrollbar',
   			draggable: true,
  		}
    });
</script>