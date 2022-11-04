<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php
	wp_head();
	?>
</head>

<body>    
	<header>
		<nav class="nav-container">
			<div class="logo-container">
				<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

					if ( has_custom_logo() ) {
						echo '<img class="header_logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
						echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
					}
					?>
				</a>
			</div>

			<div class="menu-container">
				<div class="menu-desktop">
					<?php wp_nav_menu( 'primary' ); ?>
				</div>

				<button 
					class="btn hamburger" 
					type="button" 
					data-bs-toggle="offcanvas" 
					data-bs-target="#offcanvasBottom" 
					aria-controls="offcanvasBottom">
					
					<i class="fa fa-bars" aria-hidden="true"></i>
					
				</button>

				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasBottomLabel">
							<?php
								echo get_bloginfo( 'name' );
							?>
						</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body small">
						<?php wp_nav_menu( 'primary' ); ?>
					</div>
				</div>
				
			</div>
		</nav>
	</header>
