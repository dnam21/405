<?php get_header();
/*
Template Name: History Page
*/
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="home-content center-block">
  <div class="history hero">
    <h1 class="text-center">History</h1>
    <img class="center-block" src="<?php the_field('hero');?>" alt="">
  <!-- end container -->
  </div>

    <div class="home-wrap center-block">
      <div class="home-one center-block">
        <h2 class="center-block text-center">The Shortened History of LA</h2>
        <h3 class="center-block text-center">
Since its founding on September 4, 1781, Los Angeles has grown into a dynamic metropolis with its eye on the future, while preserving its extraordinary cultural heritage. LA is one of the most ethnically diverse cities in the world, making it a truly global city.</h3>
      </div>
      </div>  
  <ul class="timeline well">
    <li>
      <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Los Angeles officially founded</h4>
        </div>
        <div class="timeline-body">
          <p>The great city of Los Angeles was founded in 1781. It was called El Pueblo de Nuestra Senora la Reina de Los Angeles de Porcincula. (Our Lady the Queen of the angels of Porcincula). At first there was only a handful of families but by 1800 it had a population of 315. The Plaza Catholic Church was built in 1822. The settlement of Los Angeles grew steadily. Then in 1847 US forces captured Los Angeles</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="glyphicon glyphicon-road"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Railroads Arrive</h4>
        </div>
        <div class="timeline-body">
          <p>The city's first railroad, the Los Angeles & San Pedro Railroad, was inaugurated in October, 1869 by John G. Downey and Phineas Banning. It ran 21 miles (34 km) between San Pedro and Los Angeles.</p>

          <p>The town continued to grow at a moderate pace. Railroads finally arrived to connect with the Central Pacific and San Francisco in 1876. The impact was small. Much greater was the impact of the Santa Fe system (through its subsidiary California Southern Railroad) in 1885. The Santa Fe and Southern Pacific lines provided direct connections to the East, competed vigorously for business with much lower rates, and stimulated economic growth. Tourists poured in by the thousands every week, and many planned on returning or resettling</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="glyphicon glyphicon-film"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Hollywood!</h4>
        </div>
        <div class="timeline-body">
          <p>Hollywood has been synonymous worldwide with the film industry for over a hundred years. It was incorporated as the City of Hollywood in 1903 but merged into LA in 1910. In the 1900s Jewish movie makers from New York found the sunny, temperate weather more suitable for year-round location shooting. It boomed into the cinematic heart of the United States, and has been the home and workplace of actors, directors and singers that range from small and independent to world famous, leading to the development of related television and music industries.</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge success"><i class="glyphicon glyphicon-globe"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">1984 Olympics</h4>
        </div>
        <div class="timeline-body">
          <p>The 1984 Summer Olympics, officially known as the Games of the XXIII Olympiad, was an international multi-sport event held in Los Angeles, California, United States in 1984. When Tehran, the only other interested city on the international level, declined to bid due to the concurrent Iranian political and social changes, the IOC awarded Los Angeles the Games by default. This was the second occasion Los Angeles hosted the games; it previously hosted in 1932.</p>
        </div>
      </div>
    </li>
  </ul>
</div>



  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>


