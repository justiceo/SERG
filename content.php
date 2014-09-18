<?php

/**
 *
 * The default template for displaying content
 *
 **/

global $tpl; 

?>

<!-- default post archive begins here -->
<?php if ( is_search() || is_archive() || is_tag() ) : ?>
    <article id="post-<?php the_ID(); ?>" class="article-post">		
		<section class="project post">
            <?php if ( has_post_thumbnail(get_the_ID())) :?>
                <?php get_template_part( 'layouts/content.post.featured' ); ?>
                <header>
			        <?php get_template_part( 'layouts/content.post.header' ); ?>
		        </header>
            <?php else : ?>
               <header class="no-thumb">
			        <?php get_template_part( 'layouts/content.post.header' ); ?>
		        </header>
                <p><?php the_excerpt_rss(); ?></p>
            <?php endif; ?>            
		</section>
     </article>		

<!-- single post begins here -->
<?php else : ?>
    <article id="post-<?php the_ID(); ?>" class="post-detail">
		    <section class="content"> 

			    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', GKTPLNAME ) ); ?>
			

			    <?php gk_post_fields(); ?>
			    <?php gk_post_links(); ?>
		    </section>
        </article>
<?php endif; ?>

<?php get_template_part( 'layouts/content.post.footer' ); ?>
	