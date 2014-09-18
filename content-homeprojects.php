<?php

/**
 *
 * The default template for displaying content
 *
 **/

global $tpl; 

?>

<article id="post-<?php the_ID(); ?>" class="post project-post home">		
		<section class="project">
            <header>
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', GKTPLNAME ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                        <?php the_title_rss(); ?>
                    </a>
                </h2>
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