<?php
/*
Template Name: New products
*
*/

get_header(); ?>
    
 <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">   

<div class="news">
<!--- New WP Query --->
<?php $news = new WP_Query( array( 'category_name' => 'gymshark' ) );
		 if ( $news->have_posts() ) :
            while ( $news->have_posts() ) : $news->the_post();
				get_template_part( 'content', get_post_format() ); 
    
            endwhile;

			 sela_content_nav( 'nav-below' ); 

            else :

			 get_template_part( 'content', 'none' ); 

            endif; ?>
            
</div><!--- end div news --->
    
		</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer(); ?>