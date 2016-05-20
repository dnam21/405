<?php get_header();
/*
Template Name: Attractions Page
*/
?>

<div class="home-content attraction center-block">
	<div class="hero">
		<img src="<?php the_field('main_image');?>" alt="">
		<h1 class="text-center">Try Something New</h1>
		<h2 class="text-center"><?php the_field('sights_text');?></h2>
	</div>
</div>	
	<div class=" attraction-body center-block">
	<?php
	$args = array('post_type'=>'attraction');
	$attraction = new WP_Query($args);
	if ($attraction->have_posts()) : while ($attraction->have_posts()) : $attraction->the_post(); ?>
			<div class="row col-sm-3 col-xs-12 center-block">
				<figure class="rift">
				  <img src="<?php the_field('main_image');?>" alt="">
				  <figcaption class="caption"><a href="<?php the_permalink();?>"><?php the_title();?></a></figcaption>
				</figure>
			<!-- end row -->
			</div>
	<?php endwhile; else: ?>
	    <p>Sorry, no pages matched your criteria.</p>
	<?php endif; ?>
	</div>
<!-- end attractions -->
</div>

<?php get_footer(); ?>


