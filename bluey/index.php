<?php get_header(); ?>
	<!-- wrapper -->
	<div class="hero-landing-page-container">
		<div class="landing-hero-overlay">
			<!-- consider using jquery show and hide instead -->
			<h3 class="hidden-element landing-hero-overlay-text">
				<?php 
					$caption_name = get_theme_mod( 'hero_image_caption');
					if (is_null($caption_name)) {
						$title = get_bloginfo('name');
						echo '$title';
					}
					echo $caption_name;
				?>
			</h3>
		</div>
		<?php 
			$hero_image_id = get_theme_mod( 'hero_image', 'https://www.redditstatic.com/new-icon.png' );
			if ($hero_image_id != 'https://www.redditstatic.com/new-icon.png' ) {
				$caption = wp_get_attachment_caption($hero_image_id);
				echo '<img id="landing-hero-img" class="landing-hero-img" src="' . esc_url(wp_get_attachment_url($hero_image_id)) . '" alt="'. $caption .'">';
			} else {
				echo '<img id="landing-hero-img" src="' . get_template_directory_uri() . '/img/gravatar.jpg" alt="Default Hero Image">';
			}
		?>
	</div>
	<br />
	<h1 style='font-size: 3rem; text-align: center;'><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
	<!--- Cards Testing Section -->
	<div class="container flex flex-row justify-between items-end m-auto">
		<?php get_template_part('loopPosts'); ?>
	</div>
	<br />
	<br />
	<hr />

<?php get_footer(); ?>
