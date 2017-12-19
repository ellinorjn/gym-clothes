<?php
/*
Template Name: New products
*
*/

get_header(); ?>
    
 <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">   

<div class="news">
<!--- WP Query to get all posts with category 'news' --->
<?php $news = new WP_Query( array( 'category_name' => 'news' ) );
        if ( $news->have_posts() ) :
            while ( $news->have_posts() ) : $news->the_post();
				get_template_part( 'content', get_post_format() );
            endwhile;
            else :
            get_template_part( 'content', 'none' ); 
        endif; ?>        
</div><!--- end div news --->
    
		</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>