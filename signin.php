<?php 

$failed = false;

	if(isset($_POST['email']) == true){
		//compare
		if($_POST['email'] == "gallon" && $_POST['password'] == "1001422"){
			//succeed
			//redirect to logged in page
			header("HTTP/1.1 301 Moved Permanently");
   			header("Location: admin.html"); //Location: the url you want to access after logged in
		}else{
			//failed
			$failed = true;
		}
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
		<title>Gallon Lu - Sign In</title>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<link href="assets/css/css1.css" media="all" rel="stylesheet" type="text/css" />
	<script src="assets/js/js1.js" type="text/javascript"></script>
 	<link rel="shortcut icon" href="assets/signinicon.ico">
  
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
	
	
	
	<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==
typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);
b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
mixpanel.init("e29a1671caec5fce824e6b4d16c3c1ad");</script><!-- end Mixpanel -->
</head>

<body  >

		<header class="main">
  <ul id="menu" class="popout_menu">
	  	<li><a href="index.html"><i class='icon-home'></i> Home</a></li>
  </ul>
</header>

<script type="text/javascript">
  $(document).ready(function () {
	  var jPM = $.jPanelMenu({
	  	openPosition: "210px",
	  	keyboardShortcuts: false,
	  		animated: true,
	  	direction: "right"
	  });
	  jPM.on();
	  $('.autofocus').focus()
  });
</script>

<div class="nav_action menu-trigger">
	<p><a href="#"><img alt="Menu" class="menu_icon" src="assets/menu.png"/></a></p>
</div>		
		<!-- Intro
	================================================== -->
	<div id="section-intro">
		
		<div id="section-colourblock" class="blue_background">
			<div class="container">
				<div class="sixteen columns">
					<div class="heading_box">
						<h1>Sign In</h1>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<!-- About -->
		<div id="section-form">
			<div class="container">
				<div class="twelve columns offset-by-two">
					<div class="form_text">
							<form accept-charset="UTF-8" method="post" action="">
							<div class="field">
								<label for="email">Username</label><br>
								<input autofocus class="text_field big_text autofocus" id="email" name="email" type="text">
							</div>							
							<div class="field">
								<label for="password">Password</label><br>
								<input class="text_field big_text" id="password" name="password" type="password">
							</div>
							<button class="submit_button" type="submit">Sign In</button>		
						<?php
							if($failed == true){
						?>
                        <h1><font color="red"><br/>Password Error!</font></h1>
                        <?php
							}
						?>							
</form>							
					</div>
				</div><!-- // .fifteen -->
				
				<div class="one column"></div>

				<div class="clear"></div>
			</div><!-- // .container -->
		</div><!-- // #section-about -->

	</div><!-- // #section-intro -->
	
		<div class="push"></div>
	</div><!-- content_wrapper -->
	
	<div class="footer_wrapper">
		<!-- Footer
		================================================== -->
		<div id="section-footer">
			<div class="container">
				<div class="sixteen columns">
					<p>
						<a href="https://www.facebook.com/GallonLu/info" target="_new">About</a> / <a href="https://www.facebook.com/GallonLu/photos" target="_new">Photo</a> / <a href="mailto:andy994837@gmail.com">Contact</a>
					</p>
				</div>
	
				<div class="clear"></div>
	
			</div><!-- // .container -->
		</div><!-- // #section-footer -->
	
	</div><!-- footer_wrapper -->

<!-- GA -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3341961-30']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!-- Chartbeat -->
<script type="text/javascript">
  var _sf_async_config = { uid: 19770, domain: 'hoverboard.io' };
  (function() {
    function loadChartbeat() {
      window._sf_endpt = (new Date()).getTime();
      var e = document.createElement('script');
      e.setAttribute('language', 'javascript');
      e.setAttribute('type', 'text/javascript');
      e.setAttribute('src','//static.chartbeat.com/js/chartbeat.js');
      document.body.appendChild(e);
    };
    var oldonload = window.onload;
    window.onload = (typeof window.onload != 'function') ?
      loadChartbeat : function() { oldonload(); loadChartbeat(); };
  })();
</script>

</body>
</html>