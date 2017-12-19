<?php
/**
 * The main template file.
 *
 * @package Sela
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php endif;

get_template_part('content', 'front');
the_post_thumbnail();


get_footer(); ?>