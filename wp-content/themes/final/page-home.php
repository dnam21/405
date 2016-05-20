<?php get_header();
/*
Template Name: Home Page
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="home-content center-block">
  <div class="hero">
    <h1 class="text-center"><span class="hero-1">Get Lost</span> <br>in the<br> <span class="hero-2">City of Angels</span></h1>
    <img class="center-block" src="<?php the_field('main_image');?>" alt="">
  <!-- end hero -->
  </div>
  <div class="home-wrap center-block">
      <div class="home-one center-block">
        <h2 class="center-block text-center">The Entertainment Capital of the World</h2>
        <h3 class="center-block text-center">Explore world-class museums, or dance the night away in a starlet-filled club. Welcome to California’s liveliest city, entertainment capital of America, with megastar wattage and nonstop activities.</h3>
      <!-- end home-content  -->
      </div>
      <div class="home-two center-block">
        <div class="row">
          <div class="box col-md-6 col-xs-12">
            <img class="center-block" src="<?php the_field('plan');?>" alt="">
            <h4 class="text-center">Plan Your <br>Own Journey</h4>
            <button class="center-block home-button"><a href="<?php the_permalink();?>/attractions">Start Planning</a></button>
          </div>
          <div class="box col-md-6 col-xs-12">
            <img class="center-block" src="<?php the_field('visit');?>" alt="">
            <h4 class="text-center">Visit World Class <br>Venues</h4>
            <button class="center-block home-button"><a href="<?php the_permalink();?>/events">Visit Today</a></button>
          </div>
        <!-- end row -->
        </div>
        <!-- container -->
      </div>

      <div class="home-three center-block">
        <h2 class="text-center">Top Picks</h2>
        <div class="row">
          <div class="hover-img col-md-4 col-sm-6 col-xs-12">
        <a href="http://www.tclchinesetheatres.com/"><img src="<?php the_field('pick1');?>" alt=""></a>
          </div>
        <div class="hover-img col-md-4 col-sm-6 col-xs-12">
        <a href="http://santamonicapier.org/"><img src="<?php the_field('pick2');?>" alt=""></a>
          </div>
          <div class="hover-img col-md-4 col-sm-6 col-xs-12">
        <a href="https://www.beverlyhills.org/"><img src="<?php the_field('pick3');?>" alt=""></a>
          </div>
          <div class="hover-img col-md-4 col-sm-6 col-xs-12">
        <a href="https://www.staplescenter.com/"><img src="<?php the_field('pick4');?>" alt=""></a>
          </div>
          <div class="hover-img col-md-4 col-sm-6 col-xs-12">
        <a href="http://www.universalstudioshollywood.com/"><img src="<?php the_field('pick5');?>" alt=""></a>
          </div>
          <div class="hover-img col-md-4 col-sm-6 col-xs-12">
        <a href="http://www.thebroad.org/"><img src="<?php the_field('pick6');?>" alt=""></a>
          </div>
        <!-- end row -->
        </div>
        <div class="home-button">
          <button class="center-block home-button"><a href="<?php the_permalink();?>/attractions">Visit Today</a></button>
        </div>
      <!-- end home-three -->
      </div>
    <!-- end home-wrap-->
  </div>
<!-- end home-content -->
</div>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>
