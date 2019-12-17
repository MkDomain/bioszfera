<?php
$base = '<!DOCTYPE html>
<html class="wide wow-animation" lang="hu">
  
<head>
    <title>Bioszféra</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril+Fatface%7CLato:300i,400,900%7CMontserrat:100,300,400,500,600,700,900">
    <link rel="stylesheet" href="load.php?req=css/bootstrap.css&type=css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="load.php?req=css/style.css&type=css" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="preloader loaded">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Betöltés...</p>
      </div>
    </div>
    <div class="page">
	      <header class="section page-header" >
        <div class="rd-navbar-wrap" style="background: #000 !important">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="50px" data-xl-stick-up-offset="50px" data-xxl-stick-up-offset="50px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo-light" src="images2/logobioszfera.png" alt="" width="156" height="28"/></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Az oldalról</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="bemutatkozas.php">Bemutatkozás</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="bongeszo.php">Böngésző</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="erettsegirol.php">Érettségiről</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="velemenyek.php">A diákok véleménye</a></li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="http://bioszfera.com/#contacts">Elérhetőség</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
            
	%content%
	  
	  <footer class="section footer-classic context-dark bg-image" style="background-image: url(images2/pattern-bg.jpg)">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4">
              <h5>Kapcsolatok</h5>
              <dl class="contact-list">
               <dt>Cím:</dt>
                <dd>Városmajori Gimnázium 1122 Városmajor utca 71.</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">vizkieviczandras@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Telefon:</dt>
                <dd><a href="tel:#">30/8151140</a> 
                </dd>
              </dl>
              
 </div>
<div class="col-md-6" align="center" style="min-width: 600px">
 <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAVJ08iZHhtdJCFsIgo_r8XT0vXOcZWuNY&amp;q=Budapest,+V%c3%a1rosmajor+u.+71,+1122" allowfullscreen></iframe>
</div>
<div class="col-md-4">
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" target="_blank" href="https://www.facebook.com/Bioszféra-1049142428462360"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
        </div>
      </footer>
    </div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
  </body>

</html>';

if (isset($_GET['q'])) {
	$content = file_get_contents('loader_files/'.$_GET['q'].'.thtml');
	echo str_replace('%content%', $content, $base);
}else{
	header('location: loader.php?q=alap');
}
?>
