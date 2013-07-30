<?php
/*
Template Name: Index Page Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>


<div class="row-fluid parent-row">
	

	<div class="index_box span12">
		<!-- <a href="/how-does-it-work/"><div id="district" class="span6"></div></a>
		<a href="/how-does-it-work/"><div id="schools_index" class="span6"></div></a> -->
		<a href="http://staartestmaker.com/sample.html?pk_campaign=LandingPage-ToSampleTestDownload "><img src="http://staartestmaker.com/images/cscope_landing.png" alt=""></a>
		<div class="span12">
		<?php $anything_sc= '[anything_slides delay=3000 resume=15000 animation=750 order=ASC orderby=menu_order]'; echo do_shortcode($anything_sc); ?></div>
		<a href="http://staartestmaker.com/sample.html?pk_campaign=LandingPage-ToSampleTestDownload "><img src="http://staartestmaker.com/images/selling_points.png" alt=""></a>

	</div>
<!-- 	<div class="row">
		<a href="/how-does-it-work/"><div id="staar_download" class="span6"></div></a>
	</div> -->

</div>

<!-- 
	<div class="span4"><a href="sample.html"><img src="<?php //get_bloginfo( 'wpurl' );?>assets/img/banner.jpg" alt="img" /></a></div> -->





	<div class="row-fluid parent-row">
	
		<?php get_template_part('templates/content', 'page'); ?>

	</div>

