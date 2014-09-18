<?php

/**
 *
 * Single page
 *
 **/

global $tpl;

gk_load('header');
gk_load('before');

?>

<section id="gk-mainbody" class="page-mainbody">
	<?php while ( have_posts() ) : the_post(); ?>
        <div class="shrink-page">
            <header>
                <?php get_template_part( 'layouts/content.post.header' ); ?>
                <em><?php the_date(); ?></em>
            </header>
		    <?php get_template_part( 'content', get_post_format() ); ?>
				
		    <?php comments_template( '', true ); ?>
		
		    <?php gk_content_nav(); ?>
        </div>
	<?php endwhile; // end of the loop. ?>
</section>

<?php

gk_load('after');
gk_load('footer');

// EOF