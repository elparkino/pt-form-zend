<footer class="content-info container-fluid" role="contentinfo">
<div class="container-fluid">

    <div class="row-fluid" id="footer-top-row">

        <div id="footer-top-form" class="span8">
        	<h3 id="form-txt" class="white-text">Keep up to date. Sign up for the newsletter</h3>
            <form class="form-inline" id="newsletter-signup" action="?action=signup" method="post">
            	<input type="text" class="input-small" name="full-name" id="full-name" placeholder="Full Name">
                <input type="email" class="input-small" name="signup-email" id="signup-email" placeholder="Email">
                <input type="email" class="input-small" name="confirm-email" id="confirm-email" placeholder="Confirm Email">

                <button type="submit" class="btn btn-alert" id="submit-button">Submit!</button>
            </form>
        </div>

        <div id="social-container" class="span3">
        	<div class="row-fluid">
        		<h3 id="social-text" class="white-text span12">Connect with us!</h3>
        	</div>
        	
            <div id="social-icons" class="row-fluid">
	            <div id="connect-twitter" class="span3"><a href="https://twitter.com/staartestmaker"><img src="/staar/assets/img/twitter-44.png"/></a></div>
	            <div id="connect-pinterest" class="span3"><a href="http://pinterest.com/progresstesting/"><img src="/staar/assets/img/pinterest-44.png"/></a></div>
	            <div id="connect-linkedin" class="span3"><a href="http://www.linkedin.com/company/2991802?trk=companies_home_ycp_logo_progress-testing"><img src="/staar/assets/img/linkedin-44.png"/></a></div>
	            <div id="connect-google" class="span3"><a href="https://plus.google.com/b/100152283638184227794/100152283638184227794/posts"><img src="/staar/assets/img/google-44.png"/></a></div>
            </div>

        </div>

    </div>

    <div id="footer-content-row" class="row-fluid">

    	<div id="footer-left-container" class="span4">
    		<?php dynamic_sidebar('sidebar-footer'); ?>
			
				<address>
					<strong>Progress Testing</strong>
					<a href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=Progress+Testing&aq=&sll=27.698638,-83.804601&sspn=16.2032,33.815918&vpsrc=0&ie=UTF8&hq=Progress+Testing&t=m&z=15">4140 NW 27th Lane, Suite G<br>
					Gainesville, Fl 32606</a>
				</address>

				<address>
					<strong>Fax:</strong><br>
					<span style="color:red;">352-336-3782</span>
					<strong>Phone:</strong>
					<a style="color:red;" href="tel:8009308378">800-930-8378</a>
				</address><br>

    	</div>

    	<div id="footer-center-container" class="span4">
    	<?php echo do_shortcode( '[contact-form-7 id="368" title="Footer Contact"]' ); ?>
    	</div>

    	<div id="footer-right-container" class="span4 visible-desktop">
    	<a class="twitter-timeline" href="https://twitter.com/ProgressTesting" data-widget-id="357592184045846529">Tweets by @ProgressTesting</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    	</div>

    </div>  

    <div id="footer-nav-row" class="row-fluid">

    	<nav id="menu-nav-footer" class="span10 pull-left visible-desktop">
        <?php
          
          if (has_nav_menu('primary_navigation')) :
            
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => 'div', 'container_class' => 'span10', 'container_id' => 'nav-container'));
          
          endif;
        ?>
    	</nav>


        <div id="copyright" class="span2 pull-right"><?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>

    </div>

</div>
</footer>

<?php wp_footer(); ?>


<?php
if($_GET['action'] == 'signup'){  
    mysql_connect('localhost','parker_emailform','email');    
    mysql_select_db('parker_subscribers');  
    $email = mysql_real_escape_string($_POST['signup-email']);
    $name  = mysql_real_escape_string($_POST['full-name']);   
  
    //validate email address - check if input was empty 
if(empty($name)){
    $status = 'error';  
    $message = 'You did not enter your name!'; 	
} 
if(empty($email)){  
    $status = 'error';  
    $message = 'You did not enter an email address!';  
}  
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //validate email address - check if is a valid email address  
    $status = 'error';  
    $message = 'You have entered an invalid email address!';  
}  
else {  
    $existingSignup = mysql_query("SELECT * FROM signups WHERE signup_email_address='$email'");     
    if(mysql_num_rows($existingSignup) < 1){  
  
     $insertSignup = mysql_query("INSERT INTO signups (signup_email_address, signup_ip_address, signup_date, signup_time) VALUES ('$email','$ip','$date','$time')");  
     
    }  
    else {  
        $status = 'error';  
        $message = 'This email address has already been registered!';  
    }  
}

$date = date('Y-m-d');  
$time = date('H:i:s'); 
$ip = $_SERVER['REMOTE_ADDR']; 
echo $ip;  
 
if($insertSignup){  
    $status = 'success';  
    $message = 'you have been signed up!';    
}  
else {  
    $status = 'error';  
    $message = 'Oops, there\'s been a technical error! You have not been signed up.';      
}  

    //return json response   
    $data = array(  
        'status' => $status,  
        'message' => $message  
    );  
  
    echo json_encode($data); 
  
    exit;  
}  


?>
 

<!--   <div class="row-fluid">

	<div class="span10 pull-left">
	<?php dynamic_sidebar('sidebar-footer'); ?> <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
    	</div>

	<div class="span2 pull-right">
	<a class="twitter_icon" href="https://twitter.com/STAARTestMaker"><img src="https://twitter.com/images/resources/twitter-bird-white-on-blue.png"></a>
	<a class="pin_icon" href="http://pinterest.com/progresstesting/"><img src="http://icons.iconarchive.com/icons/danleech/simple/1024/pinterest-icon.png"></a>
	</div>
   </div>
  </div> -->

