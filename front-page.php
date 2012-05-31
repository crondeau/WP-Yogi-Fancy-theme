<?php get_header(); ?>

<div id="main">
	
	<section id="banner"> 
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php the_content();?>
			
		<?php endwhile; endif; ?>
		
	</section>
	
	<section class="column first">
					
			<?php 
				$new_query_1 = new WP_Query();
				$new_query_1->query(array('page_id' => 46));
				// you will need to change the id of these pages.. these numbers most likely won't work for you.
				while ($new_query_1->have_posts()) : $new_query_1->the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content();
				endwhile;
			wp_reset_query(); ?>
			
	</section>
	
	<section class="column second">
		
		<?php 
			$new_query_2 = new WP_Query();
			$new_query_2->query(array('page_id' => 44));
			// you will need to change the id of these pages.. these numbers most likely won't work for you.
			while ($new_query_2->have_posts()) : $new_query_2->the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content();
			endwhile;
		wp_reset_query(); ?>
		
 	</section>

</div><!-- end of main div -->

<?php get_footer(); ?>