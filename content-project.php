<?php

/**
 *
 * The default template for displaying content
 *
 **/

global $tpl; 

?>

	      
		
<!-- project archive begins here -->
<?php if ( is_search() || is_archive() || is_tag() ) : ?>
    <article id="post-<?php the_ID(); ?>" class="post project-post<?php if(!((1 + $wp_query->current_post) % 2)){ echo ' right';} else { echo ' left';} ?>">		
		<section class="project">
            <header>
			    <?php get_template_part( 'layouts/content.post.header' ); ?>
		    </header>
            <?php get_template_part( 'layouts/content.post.featured' ); ?>            
			<?php the_excerpt(); ?>
            <span class="read-more"><a href="<?php the_permalink(); ?>">Read More &rarr;</a></span>
		</section>

        <section class="hidden" style="display: none;">
            <header>
			    <?php get_template_part( 'layouts/content.post.header' ); ?>
		    </header>
			<?php the_excerpt(); ?>
        </section>
     </article>		

<!-- single project begins here -->
<?php else : ?>
    <article id="post-<?php the_ID(); ?>" class="project-detail">
		    <section class="content project"> 

			    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', GKTPLNAME ) ); ?>
			

			    <?php gk_post_fields(); ?>
			    <?php gk_post_links(); ?>
		    </section>
        </article>
<?php endif; ?>

<?php get_template_part( 'layouts/content.post.footer' ); ?>
	