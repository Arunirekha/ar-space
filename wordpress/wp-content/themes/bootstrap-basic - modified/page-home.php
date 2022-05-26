<?php
/**
/*
*Template Name: Home Page
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */

 ?>
	<!--Slider Start-->
	<div class="container-fluid sliderWrapper">
		<div id="owl-demo" class="main-slider owl-carousel">
			<?php	query_posts('cat=4'); //filter post category and postorder
			while (have_posts()) : the_post();
			$thumb = get_the_post_thumbnail_url();?>
		   <div class="item" style="background-image: url('<?php echo $thumb;?>')">
			   <div class="overlay"></div>
				<div class="itemText">
					<h1><?php echo the_title();?></h1>
					<div class="col-md-4">
						<p><?php echo wp_trim_words(get_the_content('Read More...'), 30, false); ?></p> 
						<a href="<?php echo the_permalink(); ?>">EXPLOR</a>
					</div>	
				</div>
			</div>
			<?php endwhile; ?>
        </div>
		<a class="down-nav" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/scroll-down-mouse.gif"/></a>
	</div>
	<!--Slider End-->

<?php get_footer(); ?> 
