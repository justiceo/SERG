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
        <article id="post-<?php the_ID(); ?>" class="post member-post<?php if(!((1 + $wp_query->current_post) % 2)){ echo ' right';} else { echo ' left';} ?>">
       
		<section class="member">
             <?php get_template_part( 'layouts/content.post.featured' ); ?>
            <header>
			    <?php get_template_part( 'layouts/content.post.header' ); ?>
		    </header>
			<?php the_excerpt(); ?>
		</section>

        <section class="hidden" style="display: none;">
            <header>
			    <?php get_template_part( 'layouts/content.post.header' ); ?>
		    </header>
			<?php the_excerpt(); ?>
        </section>

       </article>

    <!-- single memeber begins here -->
	<?php else : ?>
        <article id="post-<?php the_ID(); ?>" class="member-detail">
		    <section class="content member"> 
                
			    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', GKTPLNAME ) ); ?>			

		    </section>
        </article>
	<?php endif; ?>

        
		
<?php get_template_part( 'layouts/content.post.footer' ); ?>
	