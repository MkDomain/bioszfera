<?php


function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
function getSection($string, $start, $end) {
	return $start.get_string_between($string, $start, $end).$end;
}
function replaceShowHide($string) {
	return str_replace('<a href="#hirdetesshowhide" data-toggle="collapse">Megjelenítése / eltüntetés</a>','',str_replace('class="collapse"', 'class="rem-collapse"', $string));
}
function makePage($string) {
$s = getPageHeader();
$e = getPageFooter();
	return irrelativ(str_replace('\n','',$s.$string.$e));
}

function getPageHeader() {
	$s = getSection(file_get_contents('http://bioszfera.com'), '<div class="preloader loaded">', '</header>');
	$s = str_replace('<nav class="rd-navbar rd-navbar-classic"', '<nav style="background: #000;" class="rd-navbar rd-navbar-classic"', $s);
	$s = str_replace('<li class="rd-nav-item"><a class="rd-nav-link" href="#about">Az oldalról</a></li>', '<li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Az oldalról</a></li>', $s);
	$s = str_replace('<li class="rd-nav-item"><a class="rd-nav-link" href="#testimonials">Bemutatkozás</a></li>', '<li class="rd-nav-item"><a class="rd-nav-link" href="bemutatkozas.php">Bemutatkozás</a></li>', $s);
	$s = str_replace('<li class="rd-nav-item"><a class="rd-nav-link" href="#lapozo">Lapozó</a></li>', '', $s);
	$s = str_replace('<li class="rd-nav-item"><a class="rd-nav-link" href="#bongeszo">Böngésző</a></li>', '<li class="rd-nav-item"><a class="rd-nav-link" href="bongeszo.php">Böngésző</a></li>', $s);
	$s = str_replace('<li class="rd-nav-item"><a class="rd-nav-link" href="#erettsegi">Érettségiről</a></li>', '<li class="rd-nav-item"><a class="rd-nav-link" href="erettsegirol.php">Érettségiről</a></li>', $s);
	$s = str_replace('<li class="rd-nav-item"><a class="rd-nav-link" href="#services">A diákok véleménye</a></li>', '<li class="rd-nav-item"><a class="rd-nav-link" href="velemenyek.php">A diákok véleménye</a></li>', $s);
	$s = str_replace('<li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Elérhetőség</a></li>', '<li class="rd-nav-item"><a class="rd-nav-link" href="http://bioszfera.com/#contacts">Elérhetőség</a></li>', $s);
		  return $s;
}

function getPageFooter() {
	$e =getSection(file_get_contents('http://bioszfera.com'), '<footer', '</footer>');
	return $e;
}

function irrelativ($in) {
	$out = str_replace('images/','http://bioszfera.com/images/',$in);
	$out = str_replace('css/','http://bioszfera.com/css/',$out);
	$out = str_replace('video/','http://bioszfera.com/video/',$out);
	$out = str_replace('http://bioszfera.com/fonts','fonts',$out);
	$out = str_replace('images2/','http://bioszfera.com/images2/',$out);
	return $out;
}
?>