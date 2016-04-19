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

						<a href="<?= SITE_URL; ?>"><img src="<?= THEME_URL; ?>/assets/img/logo.png" alt="Logo"></a>

					</div>

				</div>
				<!-- END span3 -->


				<div class="span7">

					<div class="wrap">

						<h2>
							Kunnskap er vårt verktøy og kvalitet er vårt merke
							<small>
								Tlf: 936 02 400, Besøksadresse: Grenseveien 73, 0663 Oslo
							</small>
						</h2>

					</div>

				</div>
				<!-- END span7 -->


				<div class="span2">

					<div class="wrap">

						<h3 class="uppercase">åpningstider</h3>

						<table>
							<tr>
								<td>Man-Fre</td>
								<td>08-16</td>
							</tr>
							<tr>
								<td>Lørdag</td>
								<td>09-14</td>
							</tr>
							<tr>
								<td>Søndag</td>
								<td>Stengt</td>
							</tr>
						</table>

					</div>

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