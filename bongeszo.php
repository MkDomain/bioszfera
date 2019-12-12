<?php
$sectiontag = '<section class="section section-md bg-default text-center" id="bongeszo" data-type="anchor">';

include('gather.php');
$page = file_get_contents('http://bioszfera.com');
$sec = getSection($page, $sectiontag, '</section>');

$fullpage = makePage($sec);
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="hu">
  <head>
  <script>function remove() {if (window.location.href.includes('#')) {window.location.href = 'bongeszo.php';}}</script>
    <title>Bioszféra - Böngésző</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril+Fatface%7CLato:300i,400,900%7CMontserrat:100,300,400,500,600,700,900">
    <link rel="stylesheet" href="http://bioszfera.com/css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="http://bioszfera.com/css/style.css" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body onload="remove();">
	<?php echo $fullpage;?>
	
	<script>
	window.onhashchange = function() { 
		var url = window.location.href;
		var id = url.substring(url.lastIndexOf('#') + 1);
		switch(id) {
		  case 'alaporasjegyzetek':
			window.location.href = 'loader.php?q=alap';
			break;
		  case 'emeltszintujegyzetek':
			window.location.href = 'loader.php?q=emelt';
			break;
		  case 'animaciok':
			window.location.href = 'loader.php?q=animaciok';
			break;
		  case 'erettsegirol':
			window.location.href = 'erettsegirol.php';
			break;
		  case 'feladatok':
			window.location.href = 'loader.php?q=faladatok';
			break;
		  case 'hamarnembirod':
			window.location.href = 'loader.php?q=hanembirod';
			break;
		  default:
		}
	};
	</script>
    <script src="http://bioszfera.com/js/core.min.js"></script>
    <script src="http://bioszfera.com/js/script.js"></script>
  </body>
</html>