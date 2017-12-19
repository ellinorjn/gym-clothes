<?php

if(has_post_thumbnail()){
        
$the_query = new WP_Query(array(
                            'posts_per_page'=>3));
if ($the_query->have_posts()):
    while ( $the_query->have_posts()) : $the_query->the_post();
        the_post_thumbnail();
endwhile;
    else: echo 'bajs';
endif;
   }
 

?>