<?php get_header(); ?>
<div id="main">
	<div id="banner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; endif; ?>
	</div>
	<div class="column first">
		<?php query_posts('page_id=46');
		// you will need to change the id of these pages.. these numbers most likely won't work for you.
		
			while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>	
			<?php the_content(); 
			endwhile;?>
	</div>
	<div class="column second">
		<?php query_posts('page_id=44');
			while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>	
			<?php the_content(); 
			endwhile;?>
 	</div>
</div><!-- end of main div -->
<?php get_footer(); ?>