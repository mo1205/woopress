<?php 
	get_header();

	if (have_posts()):
		while (have_posts()) :
			the_post(); ?>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<?php the_content();
		endwhile;
	else: 
		echo "empty post"; 
	endif;

	get_footer(); 
?>