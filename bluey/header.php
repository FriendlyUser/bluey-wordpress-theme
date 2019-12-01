<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
	<nav class="bg-white shadow" role="navigation">
  <div class="container mx-auto p-4 flex flex-wrap items-center md:flex-no-wrap">
    <div class="mr-4 md:mr-8">
      <a href="#" rel="home" style='font-size: 1.5rem;'>
				<?php
					$site_icon = get_site_icon_url( 48 );
					$title = get_bloginfo('name');
					echo '<img style="max-width: 48px;" src="' . esc_url( $site_icon) . '" alt="' . get_bloginfo() . '">';
				?>
      </a>
    </div>
    <div class="ml-auto md:hidden navbar-button">
      <button class="flex items-center px-3 py-2 border rounded" type="button" id="navbar-hide-button">
        <svg class="h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
        </svg>
      </button>
    </div>
    <div class="w-full md:w-auto md:flex-grow md:flex md:items-center" id='navbar-content-mobile'>
      <?php html5blank_nav(); ?>
    </div>
  </div>
</nav>
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
		<div class="no-wrapper-here">
			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->


	<!-- script to handle closing navbar on click -->

	<script>

	</script>