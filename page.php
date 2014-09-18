<?php

/**
 *
 * Page
 *
 **/

global $tpl;

gk_load('header');
gk_load('before');

?>

<section id="gk-mainbody" class="page-mainbody">
	<?php the_post(); ?>

	<div class="shrink-page">
	    <?php get_template_part( 'content', 'page' ); ?>
    </div>
	
	<?php if(get_option($tpl->name . '_pages_show_comments_on_pages', 'Y') == 'Y') : ?>
	<?php comments_template( '', true ); ?>
	<?php endif; ?>
</section>

<?php

gk_load('after');
gk_load('footer');

// EOF