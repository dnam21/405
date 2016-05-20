<?php get_header();
/*
Template Name: Events Page
*/
?>
	<div class="home-content attraction center-block">
		<?php if(have_rows('main')) : 
			while(have_rows('main')) : the_row(); ?>
		<div class="hero">
			<h1 class="text-center"><?php the_sub_field('title');?></h1>
			<img class="center-block" src="<?php the_sub_field('hero');?>" alt="">
		</div>
	</div>
	<?php endwhile; else: ?>
	    <p>Sorry, no pages matched your criteria.</p>
	<?php endif; ?>

	<div class="events center-block">
		<h2 class="text-center">Top Events this Month</h2>
		<?php if(have_rows('body')) : 
				while(have_rows('body')) : the_row(); ?>
			<div class="events-body center-block well col-lg-12 col-md-6 col-xs-12">
				<img class="pull-left col-xs-12" src="<?php the_sub_field('image');?>" alt="">
				<div class="text text-center">
					<h3><?php the_sub_field('title');?></h3>
					<p><?php the_sub_field('description');?></p>
					<button class="events-link "><a href="<?php the_sub_field('link');?>">Learn More</a></button>
				</div>
			</div>
			<?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>


