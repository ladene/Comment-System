<?php
include '/home/tahahn/public_html/dbc.php';
page_protect();
$date =date("Y");
$date2=$date+1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Schedule<?php echo $date."-".$date2;?></title>
                        
    <!-- BEGIN .styles -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />                      
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />   
    <link rel="stylesheet" href="css/tipsy.css" type="text/css" media="screen" />              
    <link rel="stylesheet" href="css/jCarousel.css" type="text/css" media="screen" />  
    
    <!--[if IE]> 
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /> 
    <![endif]-->
    <!--[if IE 7]>
        <link rel="stylesheet" href="css/ie7.css" type="text/css" media="screen" />
    <![endif]-->
	  
    <link rel="stylesheet" href="css/colors/black.css" type="text/css" media="screen" />   <!-- COLOR -->                
	<!-- END .styles -->           
    
    <!-- BEGIN .scripts -->
	<script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/ui.core.js'></script>
	<script type='text/javascript' src='js/jquery.cycle.all.min.js'></script>
	<script type='text/javascript' src='js/jquery.nivo.slider.pack.js'></script>
	<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
	<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
	<script type='text/javascript' src='js/jquery.jcarousel.min.js'></script>
	<script type='text/javascript' src='js/jquery.tipsy.js'></script>
	<script type='text/javascript' src='js/jquery.arrowFade.js'></script>
	<script type='text/javascript' src='js/ui.tabs.js'></script>
	<script type='text/javascript' src='js/jquery.custom.js'></script>                 
	<script type='text/javascript' src='js/jquery.tweetable.js'></script> 
	
	<script type='text/javascript' src='js/cufon-yui.js'></script>
	<script type='text/javascript' src='js/waukegan.font.js'></script>   
	<!-- END .scripts -->           

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />  
    <!-- [favicon] end -->
      
    <script type="text/javascript">
        Cufon.replace('h1, h2, h3:not(#footer h3, .title-blog), h4, h5, h6, table th', {fontFamily: 'Waukegan'});
        //Cufon.replace('.sidebar-nav a', {fontFamily: 'Champagne', hover: true});       
        
        jQuery(document).ready(function($){
            $("a[rel^='prettyPhoto']").prettyPhoto({
                theme: 'facebook'});
        });
    </script>             
    
	<style type="text/css">
	}
	</style>
	

    
</head>                   
        
<body class="no_js">
    <div id="top-space"></div>

    <!-- START HEADER -->
    <div id="header">
        
        <div class="inner">
        
            <!-- START LOGO -->
            <div id="logo">
                <a href="index.php" title="Bolder Premium Wordpress Theme">Bolder Premium Wordpress Theme</a>
            </div>
            <!-- END LOGO -->
			
			<!-- START NAV -->
            <div id="nav">
				
				<ul class="level-1 black">
					
					<li>
						<a href="index.html">Home</a><span> welcome</span>
											</li>
					
					<li>
						<a href="regtest.php">Homework</a><span> Syndication</span>
											</li>
					
					<li>
						<a href="schedule.php">Schedule</a><span> A-H Days</span>
						
					</li>
					
					<li>
						<a href="dboard.php">Dashboard</a><span>Account</span>
											</li>
					
					<li>
						<a href="about_us.html">About Us</a><span>What is this?</span>    
						
					</li>
					
					<li><a href="/Blog/">Blog</a><span> news</span></li>
					
					<li>
						<a href="contact.html">Contact</a><span> get in touch</span>
						
					</li>
					
				</ul>
				
			</div>            
			<!-- END NAV -->
            
            <div class="clear"></div>
            
        </div>
            
    </div>
    <!-- END HEADER -->   

    
    <!-- START CONTENT -->
    <div id="content">
    
        <div class="inner"> 
			<h2 class="title-page">Comment Form</h2>                    
            <form action="commentform.php" method="post">
	<strong>Movie Commentary Form </strong><br>UserName: <input type="text" name="username"/>
	<br>Comment: <br> <TEXTAREA NAME="Comment" COLS=40 ROWS=6></TEXTAREA> <input type="submit" />
</form>    
			<div class="clear">
</div>
			
			<div class="clear"></div>
			<?php


include("date.php");
include("sqlcon.php");
  $Year = date("Y");
$Year2 =$Year+1;


$sql = "SELECT full_name,courseper1,courseper2,courseper3,courseper4,courseper5,courseper6,courseper7,courseper8,nota FROM users WHERE  full_name ='" . $_SESSION['user_name'] . "'";
$result = mysql_query($sql) or die(mysql_error());  
$row = mysql_fetch_array($result);

?>

		</div>
    
    </div>
    <!-- END CONTENT -->  
    
	<!-- START FLASH NEWS -->
	<div class="news-home">
        
        <div class="inner">
            <h2>News</h2>
            
            <ul>
                <li><a href="#">Bolder, a new WordPress Theme – buy it on Theme Forest</a> | January 16, 2011</li>
                <li><a href="#">All right! Now the news are dynamics!</a> | January 16, 2011</li>
                <li><a href="#">Make your choice from 18 different skins</a> | January 16, 2011</li>
            </ul>
        </div>        
            
        <div class="clear"></div>
                      
    </div>
	<!-- END FLASH NEWS -->
    
	<!-- START FOOTER -->
    <div id="footer">
        <div class="inner five">
        
        	        	<!-- END COMPANY MENU -->
			                         
        	<!-- START TWITTER -->
        	<!-- END TWITTER -->
			                         
        	<!-- START FLICKR -->
        	<!-- END FLICKR -->
			                         
        	<!-- START SOCIALS -->
			<div class="section">
				<h3>Socials</h3>
				
				<ul class="menu">
					<li><img height="18" src="facebooklogo.jpg" width="19"><a href="http://www.facebook.com/pages/HSconnections/204759112915500">Our Facebook page</a></li>
				</ul>
			</div>
        	<!-- END SOCIALS -->
			                         
        	<!-- START GET IN TOUCH -->
			<div class="section last">
				<h3>Get in touch</h3>			
				                
					<a href="contact.html" class="contact">
					   <strong>Have a question?</strong><br />
					    <span>Contact us</span>    
					</a>
				</div>
			</div>  
        	<!-- END GET IN TOUCH -->
    
            <div class="clear"></div>  
        
        </div> 
    </div>
    <!-- END FOOTER -->  
      
    
    <!-- START COPYRIGHT -->
    <p id="copyright">Copyright 2010 - Bolder Theme, theme by <a href="http://www.yourinspirationweb.com/en">Your Inspiration Web</a> | purchase it on <a href="http://themeforest.net/?ref=Sara_p">Theme Forest</a></p>
    <!-- END COPYRIGHT -->                                    
    
    <script type="text/javascript">
        //<![CDATA[
        Cufon.now();  //]]>   
    </script>
    
         
    
    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-8632327-9']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

</body>
</html>

