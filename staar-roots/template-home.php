<?php
/*
Template Name: Index Page Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>

<div id="home-container" class="container-fluid">

	<div class="row-fluid">
		<div class="index_box span12">
			<!-- <a href="/how-does-it-work/"><div id="district" class="span6"></div></a>
			<a href="/how-does-it-work/"><div id="schools_index" class="span6"></div></a> -->
			<a href="http://staartestmaker.com/sample.html?pk_campaign=LandingPage-ToSampleTestDownload "><img src="http://staartestmaker.com/images/cscope_landing.png" alt=""></a>
		</div>

	<div class="row-fluid">
		<div class="span12">
			<?php 
			$anything_sc = '[anything_slides delay=3000 animation=750 order=ASC orderby=menu_order]'; 
			
			echo do_shortcode($anything_sc); 
			?>
		</div>
	</div>

	<div id= "module-container" class="row-fluid">
		<div id="item-bank-module" class="span4 module-box">
			<?php the_block('Item Bank'); ?>
		</div>
		<div id="demo-call-module" class="span4 module-box">
			<?php the_block('Demo Module'); ?>
		</div>
		<div id="software-module" class="span4 module-box">
			<?php the_block('Software Module'); ?>
		</div>
	</div>


</div>

	<div class="row-fluid parent-row">
	
		

	</div>

