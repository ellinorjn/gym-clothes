<?php
/**
 *Shows all the posts under "Alla recensioner"
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
                    get_template_part( 'content', get_post_format() );
				    //VAD GÖR DETTA FÖR MOST CLICKED
                    wpb_set_post_views(get_the_ID()); 

                endwhile;
                else : 
                    get_template_part( 'content', 'none' );
		      endif;?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>