<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>
<section class="home-page">
   	<div id="about-content">
    	<h3>Accelerate is a strategy and marketing agency <br> located in the heart of NYC. Our goal is to build <br> businesses by making our clients visible and <br> making their customers smile.</h3>
   	</div>
</section><!-- #primary -->

<section class="our-services">
<div class=our-services>
	<div class="services-content">
		<h4>Our services</h4><br>
		<h6><?php the_content(); ?></h6>
	</div>

	<div class="services">
	  	<?php query_posts('posts_per_page=4&post_type=about'); ?>

		<?php while ( have_posts() ) : the_post();
			$service_icon = get_field('service_icon');
			$size = "medium";
		?>
  	
		<article id="individual-service">
        	<figure id="about-image">
         		<?php if($service_icon){ 
					echo wp_get_attachment_image($service_icon, $size);
					} ?>
        	</figure>
			<aside id="about-sidebar">
				  <h1><?php the_title(); ?></a></h1>
				  <h6><?php the_content(); ?></h6>
			</aside>
         	<?php endwhile; //end of the loop ?>
    	</article>

  		<?php wp_reset_query(); //resets the altered query back to the original ?>
	</div>

  	<div>
    	<span class="line"></span>
  	</div>

  	<div class="interested">
		<div> 
			<span class="line"></span>
		</div>
		<div id="interested">
      		<h4>Interested in working with us?</h4>
		</div>
		<div id="interested-button">
			<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>