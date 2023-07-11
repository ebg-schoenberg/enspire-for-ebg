<?php get_header(); ?>

<div class="content">
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
		
			<article <?php post_class('group post-standard'); ?>>
				
				<div class="post-inner post-hover">
					
					<div class="post-content">
							
						<h2 class="post-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h2><!--/.post-title-->
						
						<div class="entry excerpt">				
							<?php the_content(); ?>
						</div><!--/.entry-->
					
					</div><!--/.post-content-->
					
				</div><!--/.post-inner-->	
				
			</article>
			
		<?php endwhile; ?>
		
	</div><!--/.pad-->
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>