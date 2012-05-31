<!-- begin footer -->
<footer>
	
	<div class="col">
		
		<h4>Latest Blog Posts</h4>
		
		<ul>
		<?php query_posts('showposts=5'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			 <?php endwhile; ?>
		</ul> 
	</div>
	
	<div class="col">
		
		<h4>Latest Comments</h4>
		<ul>
		  <?php get_recent_comments(); 
		//This function is from the Get Recent Comments Plugin
		//http://wordpress.org/extend/plugins/get-recent-comments/ ?>
		</ul>
		
	</div>

	<div class="col last">
		
		<h4>Latest Tweet</h4>
		<?php twitter_messages("bluelimemedia"); 
		//This function is from the Twitter for WordPress Plugin
		//http://wordpress.org/extend/plugins/twitter-for-wordpress/ ?>
	</div>
	
</footer>

</div><!-- end of wrapper -->
<?php wp_footer(); ?>
</body>
</html>