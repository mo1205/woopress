<?php get_header(); ?>

<div class="main container">
	<div class="col-md-1"></div>
	<div class="col-md-10 col-sm-12">
	<?php
		if (have_posts()):
			while (have_posts()): the_post(); ?>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Read more...</a>

				<div class="info-meta">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
				<?php
				the_date();
				the_category(',');?>
				</div>
				<?php
			endwhile;
		else:
			echo "empty post"; 
		endif;
	?>
	</div>
	<div class="col-md-1"></div>

</div>

<?php get_footer(); ?>