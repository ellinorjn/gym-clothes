<?php
/*
*Template Name: Most clicked posts
*
*/
get_header(); ?>
    
 <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> 
<?php $mostclickedpost = new WP_Query( array(
                            'posts_per_page' => 10, 
                            'meta_key' => 'wpb_post_views_count', 
                            'orderby' => 'meta_value_num', 
                            'order' => 'DESC'  ) );
while ( $mostclickedpost->have_posts() ) : $mostclickedpost->the_post();
            get_template_part( 'content', get_post_format() );
endwhile;?>
		</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>