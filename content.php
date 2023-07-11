<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group post-standard'); ?>>	
	<div class="post-inner post-hover">
		
		<div class="post-content">
				
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2><!--/.post-title-->
			
			<ul class="post-meta group">
				<li><?php the_category(' / '); ?></li>
				<li><i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?></li>
			</ul><!--/.post-meta-->
			
			<div class="entry excerpt">				
				<?php the_content(); ?>
			</div><!--/.entry-->
		
		</div><!--/.post-content-->
		
	</div><!--/.post-inner-->	
</article><!--/.post-->	