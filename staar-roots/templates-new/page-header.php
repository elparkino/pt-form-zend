<div class="page-header">
	<div class="header-brand-info">
	<div class="row">	
		<div class="staar-logo span8">

			<a href="<?php get_bloginfo('wpurl');?>/staar-xfzv"><img src="<?php get_bloginfo('wpurl');?>/staar-xfzv/assets/img/STAAR-Test-Maker.png" alt="Star Test Maker" /></a>

				<div class="number-box">
						<img id="phone-sprite" src="<?php get_bloginfo('wpurl');?>/staar-xfzv/assets/img/phone.jpg" alt="Phone No" /><span class="contact-numbers" id="phone"><a href="tel:800-930-8378">800-930-8378</a></span>
						<img id="fax-sprite" src="<?php get_bloginfo('wpurl');?>/staar-xfzv/assets/img/fax.png"  alt="Fax No"/><span class="contact-numbers" id="fax">352-336-3782 </span>
				</div>
		</div>

		<div class="span4">

			<div class="countdown-container" style="width:250px; margin:0 auto;">
				<?php
				if(function_exists('shailan_CountdownWidget_shortcode')){
				  $countdown = array(
				    'title'     => 'STAAR TESTING Begins:',
				    'event'     => 'Contact Progress Testing Now!',
				    'date'      => '12 March 2014',
				    'hour'      => 16,
				    'minutes'   => 45,
				    'seconds'   => 0,
				    'format'    => 'yowdHMS',
				    'link'      => true
				  ); 
				 
				  echo shailan_CountdownWidget_shortcode($countdown);
				}
				?>
			</div>
		</div>
	</div>

</div>
	<header class="banner navbar" role="banner">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>
	      <a class="brand" href="<?php echo home_url(); ?>/">
	        Home<?php //bloginfo('name'); ?>
	      </a>
	      
	      <nav class="nav-main nav-collapse collapse" role="navigation">
	        <?php
	          
	          if (has_nav_menu('primary_navigation')) :
	            
	            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
	          
	          endif;
	        ?>

	      </nav>
	   
	    </div>
	  
	  </div>
	 <div id="header_banner" class="yellow" data-toggle="collapse" data-target=".nav-collapse" ><span id="ratings" class="banner_text">Enjoying STAAR Test Maker test items? </span><a href="/">Add a Rating</a><span class="banner_text"> Thank you!</span></div>
	</header>

</div>