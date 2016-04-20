<?php get_header(); ?>

<!-- =================================================
	section slider
================================================== -->
<section class="slider">

	<div class="container">

		<div class="row">

			<div class="span12">

				<div class="owl-carousel">

					<?php

					// check if the repeater field has rows of data
					if( have_rows('slides', 'option') ):

					 	// loop through the rows of data
					    while ( have_rows('slides', 'option') ) : the_row();

						$slide_image = get_sub_field('slide_image');

					?>

					<div class="slide" style="background-image: url('<?php echo $slide_image['url']; ?>')">

						<div class="wrap">

							<a href="http://localhost/norgesbillakk/kontakt-oss/" class="btn btn-slider">Kontakt oss! &raquo;</a>

						</div>

					</div>
					<!-- END slide -->


					<?php

					endwhile;

						else :

					    // no rows found

					endif;

				?>

				</div>
				<!-- END owl-carousel -->

			</div>

		</div>

	</div>
	
</section>
<!-- END section slider -->



<!-- =================================================
	section banners
================================================== -->
<section class="banners">

	<div class="container">

		<div class="row">

			<div class="span12">

				<div class="wrap">

					<ul>

						<?php

						// check if the repeater field has rows of data
						if( have_rows('banners', 'option') ):

						 	// loop through the rows of data
						    while ( have_rows('banners', 'option') ) : the_row();

							$logotype = get_sub_field('logotype');
							$link = get_sub_field('link');

						?>

						<li><a href="<?php echo $link; ?>"><img src="<?php echo $logotype['url']; ?>" alt="<?php echo $logotype['alt']; ?>"></a></li>

						<?php

						endwhile;

							else :

						    // no rows found

						endif;

					?>

					</ul>

				</div>

			</div>

		</div>

	</div>

</section>
<!-- END section banners -->


<!-- =================================================
	section featured
================================================== -->
<section class="featured">

	<div class="container">

		<div class="row">


			<?php

			// check if the repeater field has rows of data
			if( have_rows('featured_boxes', 'option') ):

			 	// loop through the rows of data
			    while ( have_rows('featured_boxes', 'option') ) : the_row();

				$title = get_sub_field('title');
				$content = get_sub_field('content');

			?>

			<div class="span4">

				<div class="wrap">

					<h2><?php echo $title; ?></h2>

					<p>
						<?php echo $content; ?>
					</p>

				</div>

			</div>
			<!-- END span4 -->

			<?php

				endwhile;

					else :

				    // no rows found

				endif;

			?>


		</div>

	</div>

</section>
<!-- END section featured -->

<?php get_footer(); ?>