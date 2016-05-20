<?php get_header(); ?>
<a class="btn btn-primary" href="<?php bloginfo('url');?>">Back to home</a>



<div class="single-att center-block">
	<div class="hero single-att">
		<?php if(have_rows('title')) : 
			while(have_rows('title')) : the_row(); ?>
		<img class="center-block" src="<?php the_sub_field('main_image');?>" alt="">
	</div>
</div>		
		<h1 class="single-title text-center"><?php the_sub_field('title');?></h1>
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>


	<div class="single center-block">
		<?php if(have_rows('body')) : 
			while(have_rows('body')) : the_row(); ?>
		<div class="events-body well col-lg-12 col-md-6 col-xs-12">	
				<img class="pull-left col-xs-12" src="<?php the_sub_field('images');?>" alt="">	
				<div class="text text-center">
				<h3><?php the_sub_field('title');?></h3>
					<p><?php the_sub_field('descriptions');?></p>
				</div>
		</div>	
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>		


<?php get_footer(); ?>


