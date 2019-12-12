<?php
if (!isset($_GET['req'])) {
	header('index.php');
}
if (!isset($_GET['type'])) {
	header('index.php');
}
if ($_GET['type'] == 'js') {
	header('Content-type: text/javascript');
}
if ($_GET['type'] == 'css') {
	header('Content-type: text/css');
}
echo file_get_contents('http://bioszfera.com/'.$_GET['req']);
?>