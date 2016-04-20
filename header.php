<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/base.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/gridset.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/style.css">
	<link rel="stylesheet" href="<?= THEME_URL; ?>/assets/css/responsive.css">


	<!-- JS
	================================================== -->
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	<script src="<?= THEME_URL; ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?= THEME_URL; ?>/assets/js/scripts.js"></script>


	<!-- HTML 5 SUPPORT
	================================================== -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


</head>
<body <?php body_class(); ?>>


<!-- =================================================
	section mobile-navigation
================================================== -->
<section class="mobile-navigation mobile">

	<nav>

		<a class="nav-toggle" href="#">Menu</a>

		<?php dynamic_sidebar('main_menu'); ?>

	</nav>

</section>
<!-- END mobile-navigation -->


<!-- =================================================
	header
================================================== -->
<header>


	<!-- header-top -->
	<section class="header-top">
		
		<div class="container">

			<div class="row">

				<div class="span3">

					<div class="wrap">

						<?php $logo = get_field('logo', 'option');  ?>

						<a href="<?= SITE_URL; ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"></a>

					</div>

				</div>
				<!-- END span3 -->


				<div class="span7">

					<div class="wrap">

						<h2>

							<?php the_field('header_title', 'option'); ?>
							
							<small>

								<?php the_field('header_subtitle', 'option'); ?>

							</small>

						</h2>

					</div>

				</div>
				<!-- END span7 -->


				<div class="span2">

					<div class="wrap">

						<?php

							// check if the repeater field has rows of data
							if( have_rows('header_right_section', 'option') ):

							 	// loop through the rows of data
							    while ( have_rows('header_right_section', 'option') ) : the_row(); 

							?>
						      
						<h3 class="uppercase"><?php the_sub_field('title', 'option'); ?></h3>	

					<?php

						// check if the repeater field has rows of data
						if( have_rows('table_row', 'option') ):

						 	// loop through the rows of data
						    while ( have_rows('table_row', 'option') ) : the_row();

						?>

						<table>
							<tr>
								<td><?php the_sub_field('table_row_title', 'option'); ?></td>
								<td><?php the_sub_field('table_row_content', 'option'); ?></td>
							</tr>
						</table>

						<?php

							endwhile;

								else :

							    // no rows found

							endif;

							?>

					</div>


					<?php

						endwhile;

							else :

						    // no rows found

						endif;

						?>

				</div>
				<!-- END span2 -->


			</div>

		</div>

	</section>
	<!-- END header-top -->


	<!-- header-navigation -->
	<section class="header-navigation desktop">

		<div class="container">

			<div class="row">

				<div class="span12">

					<nav>

						<?php dynamic_sidebar('main_menu'); ?>

					</nav>

				</div>

			</div>

		</div>

	</section>
	<!-- END header-navigation -->

</header>