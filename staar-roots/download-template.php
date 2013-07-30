<?php
/*
Template Name: Download Page Template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
	
	<form class="form-inline search-options">
	  <label class="checkbox">
	    <input type="checkbox" id="type-reading" checked> Reading
	  </label>
	  <label class="checkbox">
	    <input type="checkbox" id="type-writing" checked> Writing
	  </label>
	  <label class="checkbox">
	    <input type="checkbox" id="type-math" checked> Math
	  </label>
	  <label class="checkbox">
	    <input type="checkbox" id="type-science" checked> Science
	  </label>
	    <input type="checkbox" id="type-EOC" checked> EOC
	  </label>
	  <label class="checkbox">
	    <input type="checkbox" id="type-spanish" checked> Spanish Trans-adaption
	  </label>

	</form>

	<div id="container" class= "container-fluid"></div>

	<div class="row parent-row">
	
		<?php get_template_part('templates/content', 'page'); ?>

	</div>

<?php get_template_part( 'templates/fur', $fur_name = 'template' ); ?>

<noscript>
 For full functionality of this site it is necessary to enable JavaScript.
 Here are the <a href="http://www.enable-javascript.com/" target="_blank">
 instructions how to enable JavaScript in your web browser</a>.
</noscript>