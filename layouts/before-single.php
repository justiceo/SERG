<?php 
	
	/**
	 *
	 * Template elements before the page content
	 *
	 **/
	
	// create an access to the template main object
	global $tpl;
	
	// disable direct access to the file	
	defined('GAVERN_WP') or die('Access denied');
	
?>

<div id="gk-header" class="make-background"  style="background: url('<?php echo get_template_directory_uri(); ?>/images/CCI.png');">
	<div class="gk-page">
        <?php if(gk_is_active_sidebar('header')) : ?>
			<?php gk_dynamic_sidebar('header'); ?>
        <?php endif; ?>
	</div>
</div>


<div class="gk-page-wrap banner-space">
	<div class="gk-page">
		<div id="gk-mainbody-columns" <?php if(get_option($tpl->name . '_page_layout', 'right') == 'left') : ?> class="gk-column-left"<?php endif; ?>>
			<section>
				
				<div id="gk-mainbody-top">					

                    <?php if ( 'member' == get_post_type()) : ?>
                      <section>                     
                       <article id="post-<?php the_ID(); ?>" class="member-single banner">       
		                    <section class="member">
                                <?php get_template_part( 'layouts/content.post.featured' ); ?>
                                <header>
			                        <?php get_template_part( 'layouts/content.post.header' ); ?>

                                    <?php $custom_fields = get_post_custom(get_the_ID());
                                    $custom_field = $custom_fields['member_title'];
                                    foreach( $custom_field as $key => $value ) {
                                        echo "<p class=\"mtitle\">" . $value . "</p>";
                                    }

                                    $custom_field = $custom_fields['member_location'];
                                    foreach( $custom_field as $key => $value ) {
                                        echo "<p class=\"mlocation\">" . $value . "</p>";
                                    }

                                    $custom_field = $custom_fields['member_contact'];
                                    foreach( $custom_field as $key => $value ) {
                                        echo "<p class=\"mcontact\">" . $value . "</p>";
                                    }

                                   /* $custom_field = $custom_fields['member_interests'];
                                    foreach( $custom_field as $key => $value ) {
                                        echo "<br />/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/";
                                        echo "<p class=\"minterests\">" . $value . "</p>";
                                    }*/
                                ?>
		                        </header>
            
                                
			                    
		                    </section>
                        </article>
                        </section>
                    <?php endif; ?>
                    
                    <?php if ( 'project' == get_post_type()) : ?>
                      <section>                     
                       <article id="post-<?php the_ID(); ?>" class="project-post-banner">       
		                    <section class="project">
                                <header>
			                        <?php get_template_part( 'layouts/content.post.header' ); ?>
                                    <?php $custom_fields = get_post_custom(get_the_ID());
                                    $custom_field = $custom_fields['project_authors'];
                                    foreach( $custom_field as $key => $value ) {
                                        echo "<p class=\"project_author\"> Authors: " . $value . "</p>";
                                    }

                                    $custom_field = $custom_fields['project_date'];
                                    foreach( $custom_field as $key => $value ) {
                                        echo "<p class=\"project_date\">Published On: " . $value . "</p>";
                                    }
                                ?>
		                        </header>
		                    </section>
                        </article>
                        </section>
                    <?php endif; ?>
                    
				</div>
				
				
				<!-- Mainbody, breadcrumbs -->
				<?php if(gk_show_breadcrumbs()) : ?>
				<div id="gk-breadcrumb-area">
					<?php gk_breadcrumbs_output(); ?>
				</div>
				<?php endif; ?>