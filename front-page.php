<?php

/**
 * GavernWP main template file
 *
 * This file is loaded only when user openes the site using the template
 *
 * @package WordPress
 * @subpackage GavernWP
 * @since GavernWP 1.0
 **/

global $tpl;

gk_load('header');
gk_load('before');

?>		

<section id="gk-mainbody" class="page-mainbody">
	<?php the_post(); ?>

	<div class="shrink-page home">
        <img src="<?php echo get_template_directory_uri();?>/images/dragon.png" class="dragon" alt="drexel dragon"/>
	    <h1>Software Engineering Research Group</h1>
        <h4>College of Computing and Informatics, Drexel University</h4>
    </div>
    <section id="gk-mainbody" class="category-page home">
        <?php do_action('gavernwp_before_loop'); ?>
	    <?php
            $args = array( 'post_type' => 'project', 'posts_per_page' => 2 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
             get_template_part( 'content', 'homeprojects' );
            endwhile;
        ?>
	
		<?php gk_content_nav(); ?>
		
		<?php do_action('gavernwp_after_loop'); ?>
    </section>

</section>


<?php

gk_load('after');
gk_load('footer');

/* EOF */