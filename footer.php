

<!-- =================================================
	footer
================================================== -->
<footer>

	<div class="container">

		<div class="row">

			<div class="span6">

				<p>
					<?php the_field('footer_left', 'option'); ?>
				</p>

			</div>
			<!-- END span6 -->


			<div class="span6">

				<p>
					<?php the_field('footer_right', 'option'); ?>
				</p>

			</div>
			<!-- END span6 -->


		</div>

		<!-- scrollTop button -->
		<a href="#" class="scrollTop">&uarr;</a>

	</div>

</footer>


<!-- End Document
================================================== -->

<?php wp_footer(); ?>
</body>
</html>