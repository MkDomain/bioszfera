<?php
$sectiontag = '<section class="vide_bg video-bg-overlay" data-vide-bg="video/Fold.mp4" data-vide-options="posterType: jpg">';
$sectiontag2 = '<section class="section section-md bg-gray-100" id="about" data-type="anchor">';
$sectiontag3 = '<section class="section section-md bg-gray-100 text-center" id="erettsegielokeszito" data-type="anchor">';
$sectiontag4 = '<section class="section section-md bg-gray-100 text-center" id="mediafigyelo" data-type="anchor">';

include('gather.php');
$page = file_get_contents('http://bioszfera.com');
$sec = getSection($page, $sectiontag, '</section>');
$sec = $sec.getSection($page, $sectiontag2, '</section>');
$sec = $sec.'<section class="section section-md bg-gray-100" id="about" data-type="anchor"><div class="container text-center"><p class="body" align="justify"> <br>A weboldal egy módosított formája a <a href="http://bioszfera.com">Bioszférának</a><br>Az oldal nem tartalmazza az eredeti oldal jegyzeteit, fájljait, stb. Ez egy php script ami szűri az eredeti oldalt. Forráskód: <a href="https://github.com/MkDomain/bioszfera">Kattints ide!</a><br><br>Amennyiben híbát talál (nem működő link, stb) kérem éresítsen <a href="mailto:mkdomainyt@gmail.com">itt!</a><br><br><a href="#testimonials">MkDomain</a></p></div></section>';
$sec = $sec. '<section class="section parallax-container context-dark" id="erdoelvalaszto" data-parallax-img="images2/2biotechnology.jpg"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></section>';
$sec = $sec.replaceShowHide(getSection($page, $sectiontag3, '</section>'));
$sec = $sec. '<section class="section parallax-container context-dark" id="erdoelvalaszto" data-parallax-img="images2/2biotechnology.jpg"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></section>';
$sec = $sec.getSection($page, $sectiontag4, '</section>');

$fullpage = makePage($sec);
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="hu">

<head>
    <title>Bioszféra - Az oldalról</title>
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
  <body>

      
		<?php echo $fullpage;?>
	
    <script src="http://bioszfera.com/js/core.min.js"></script>
    <script src="http://bioszfera.com/js/script.js"></script> 
    
  </body>
</html>