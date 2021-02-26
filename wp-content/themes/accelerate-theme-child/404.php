<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="not-found">
		<div class="main-content" role="main">
            <div class=not-found-text>
                <h2>Oh man, you seem a little lost...</h2>
                <h4>Wanna go explore some other territory?</h4>
                <h6>Check out our <a href="<?php echo site_url('/blog/') ?>"><span style="color:#45AB9D">blog</span></a>  or some of our featured <a href="<?php echo site_url('/case-studies/') ?>"><span style="color:#45AB9D">work</span>.</a><h6>
            </div>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>