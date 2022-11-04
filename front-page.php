<div class="banner">
		<?php
			get_header();
		?>
		<h1><?php printf( get_theme_mod( 'banner_heading', __( 'Our Community<br>Our Family', 'banner_heading' ) ) ); ?></h1>
		<button class="banner_button"><a class= "banner_link" href="<?php echo get_theme_mod( 'banner_button_url', __( '#', 'banner_button_url' ) ); ?>"><?php printf( get_theme_mod( 'banner_button_text', __( 'Login', 'banner_button_text' ) ) ); ?></a></button>

	</div>

	<div class="img-text-container">
		<div class="img-text">
			<div class="head-text">
				<h2>
					<?php printf( get_theme_mod( 'second_section_heading', __( 'We Live Together As One', 'second_section_heading' ) ) ); ?>
				</h2>
			</div>

			<div class="content-text">
				<p>
					<?php printf( get_theme_mod( 'second_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'second_section_paragraph' ) ) ); ?>
				</p>
			</div>
			
		</div>

		<div class="img-text">

			<div class="head-text align-self-center mb-3">
				<h2 class="img-text-second__header"><?php printf( get_theme_mod( 'third_heading', __( 'Upcoming Events', 'third_heading' ) ) ); ?></h2>
			</div>

			<div class="content-text--second flex-column">
				<p class="context-text__text">
					<?php printf( get_theme_mod( 'description', __( 'Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urnaviverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsumiaculis dapibus. Praesent viverra vitae velit sit amet maximus <br><br><b><span>Backyard Sale 12-15-2021 <br>Easter Egg Hunt 04-23-2021 <br>Coffee Hours 02-08-2021 <br>Backyard Together 11-16-2021 <br>Pet Celebration 07-10-2021</span></b>', 'description' ) ) ); ?>
				</p>
			</div>
		</div>
	</div>

		

	<div class="house">
		<img class="houses-img" src="<?php echo get_theme_mod( 'whole_image', get_bloginfo( 'template_directory' ) . '/assets/images/Asset 3 (1).png' ); ?>" border="0" alt="">
	</div>

<?php
get_footer();
?>
