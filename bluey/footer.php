		<div class='container'>
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<?php get_template_part('searchform'); ?>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<?php
						$caption_name = get_theme_mod( 'copyright');
						_e('Bluey', $caption_name);
					?>
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->
		</div>
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
	</body>
</html>
