<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			
			<footer class="container-fluid footerWrap">
				<div class="row">
				<p>© Copyright 2022 by <a href="#">Aruni</a></p>
				</div>
			</footer>

		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
<script>
	var j = jQuery.noConflict();
    j(document).ready(function() {
		j("#owl-demo").owlCarousel({
		singleItem:true,
		nav:true,
		dots: true
		});
		
	});

		var owl = $('.owl-carousel');
	owl.owlCarousel({
		items:4,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:1000,
		autoplayHoverPause:true
	});
	$('.play').on('click',function(){
		owl.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
		owl.trigger('stop.owl.autoplay')
	})
</script>
</html>
