<?php 
	
	/**
	 *
	 * Template footer
	 *
	 **/
	
	// create an access to the template main object
	global $tpl;
	
	// disable direct access to the file	
	defined('GAVERN_WP') or die('Access denied');
	
?>

	<footer id="gk-footer" class="gk-page">
        <div class="container">
        <div class="row">
            <div class="col-md-12">		
		    <?php gavern_menu('footermenu', 'gk-footer-menu'); ?>
		
		    <div class="gk-copyrights">
			    <?php echo str_replace('\\', '', htmlspecialchars_decode(get_option($tpl->name . '_template_footer_content', ''))); ?>
				
			    <a href="#top" id="gk-top-link"><?php _e('Back to top', GKTPLNAME); ?></a>
		    </div>
            </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; SERG College of Computing and Informatics Drexel University.</p>
                </div>
            </div>
        </div>	
		
	</footer>
	
	<?php if(gk_is_active_sidebar('social')) : ?>
	<div id="gk-social-icons" class="<?php echo get_option($tpl->name . '_social_icons_position', 'right'); ?>">
		<?php gk_dynamic_sidebar('social'); ?>
	</div>
	<?php endif; ?>
	
	<?php gk_load('social'); ?>
	
	<?php do_action('gavernwp_footer'); ?>
	
	<?php 
		echo stripslashes(
			htmlspecialchars_decode(
				str_replace( '&#039;', "'", get_option($tpl->name . '_footer_code', ''))
			)
		); 
	?>
	
	<?php wp_footer(); ?>
	
	<?php do_action('gavernwp_ga_code'); ?>
</body>
</html>
