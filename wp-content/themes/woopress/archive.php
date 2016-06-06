<?php get_header(); ?>
<?php
	if (have_posts()):
		while (have_posts()) :
			the_post(); ?>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<?php the_excerpt(); ?>

			<div class="info-meta">
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
			</div>
			<?php
			the_date();
			the_category(',');
		endwhile;
	else: 
		echo "empty post"; 
	endif;
?>
<?php get_footer(); ?>