<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Michigan Network for Youth and Families beta</title>
	<link rel="stylesheet" href="css/global.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/glyphs.css" type="text/css" media="screen">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body class="events">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php include("inc/nav.inc.php");?>
	<div class="page">
		<div class="col-12">
			<h1>News</h1>
			<p>See everything thats happening here and on our Facebook page!</p>
		</div>	
		<div class="col-12">
			<h1>Events</h1>
			<p>Check out our calendar below and save events to your own Google calendar.</p>
		</div>
		<div class="col-12">
			<iframe src="https://calendar.google.com/calendar/embed?title=mnyf%20events&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=9f3rhmk2633klsvrb0vmgso2c8%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York" style="border:solid 1px #CE3337; margin-right:10px;" frameborder="0"  scrolling="no"></iframe>
		</div>
		<div id="conf" class="col-5">
			<h3>MNYF Annual Conference</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Yas yas yas yas yas. Oh yas this looks good. Yas.</p>
		</div>
		<div class="col-7">
			<img class="max" src="img/conference.png" alt="" />
		</div>
		<div class="clear"></div>		
		<div class="col-6 nomobile">
			<div class="fb-page" data-href="https://www.facebook.com/mnyfmichigan/" data-tabs="timeline" data-width="500" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mnyfmichigan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mnyfmichigan/">Michigan Network for Youth &amp; Families</a></blockquote></div>
		</div>
		<div class="col-6 nombile">
			<h3>Stay Updated!</h3>
			<p>Like our page on Facebook to stay up to date on anything and everything that is MNYF!</p>
		</div>
		<div class="clear"></div>
		<div class="col-12">
			<h1>Publications</h1>
			<p>Read all of our materials here!</p>
		</div>	
	</div>
	<?php include("inc/footer.php");?>		
</body>
<?php include("inc/scripts.php");?>	
</html>	