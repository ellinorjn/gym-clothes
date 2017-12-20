<?php
/**
 * Template Name: First page
 *
 * 
 */

get_header(); ?>
<div class="main">
<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>

		<?php endif;

get_template_part('content', 'front');
the_post_thumbnail();?>
</div>

<?php get_footer(); ?>