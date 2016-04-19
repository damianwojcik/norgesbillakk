<?php get_header(); ?>

<!-- =================================================
	main content
================================================== -->
<main>

	<div class="container">

		<div class="row">

			<div class="span12">
				
				<div class="wrap">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<!-- breadcrumbs -->
						<div class="breadcrumbs">

							<?php if(function_exists('bcn_display')) { bcn_display(); }?>

						</div>

						<!-- content -->
						<?php the_content(); ?>


						<!-- LOOP Gallery -->
						<?php $images = get_field('gallery'); ?>

						<?php
							if( !empty($images) ): ?>


							<!-- gallery module -->
							<div class="gallery">

								<?php foreach( $images as $image ): ?>

						                <a rel="lightbox" href="<?php echo $image['url']; ?>">
						                	<div class="gallery-item" style="background-image: url('<?php echo $image['url']; ?>');"></div>
						                </a>
						                
						        <?php endforeach; ?>

							</div>

						<?php endif; ?>
						<!-- END LOOP GALLERY -->


						<!-- Ninja FORM -->
						<div class="form-wrap">

							<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>

						</div>


					<?php endwhile; endif; ?>


				</div>

			</div>

		</div>

	</div>

</main>

<?php get_footer(); ?>