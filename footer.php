<?php
    wp_footer();
    ?>
    <footer>
    	<div class="left-foot">
        	<img src="<?php echo get_theme_mod('footer_image_logo',get_bloginfo('template_directory').'/assets/images/footlogo.png' )?>" border="0" alt="">
        	<?php wp_nav_menu('primary'); ?>
        		<p class="copyright">
                	<?php 
						printf( 
							'%s. %s &copy; %s', 
                            get_theme_mod('copyright_text', __( '© Copyright 2021 HOA Management', 'copyright_text' ) ),
                            get_bloginfo('name'), 
                            date_i18n( 'Y' )
						); 
                    ?>
                </p>
    	</div>
    	<div class="right-foot">
    		<img src="<?php echo get_theme_mod('footer_image_map',get_bloginfo('template_directory').'/assets/images/Asset 5 1.png' )?>" border="0" alt="">
		</div>

    </footer>

</body>
   
</html>