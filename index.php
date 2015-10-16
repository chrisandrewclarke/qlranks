<?php
if( isset($_GET['playerName']) ){
$_GET['url'] = 'http://www.qlranks.com/duel/player/'.$_GET['playerName'];
// 	echo $_GET['url'];
	$h=file_get_contents($_GET['url']);
	// echo $h;


	// $h = 'xxbxxbxxbxxbxx';

	$hPreFinal = explode('<div class="box" id="vital_stats"', $h);
	// print_r ($hPreFinal);
	$hFinal = explode('div>', $hPreFinal[1]);
	// print_r ($hFinal);

	echo '<div'.$hFinal[0].'div>';
	}
	else{
	$_GET['url'] = 'http://www.qlranks.com/duel/country/za';
// 	echo $_GET['url'];
	$h=file_get_contents($_GET['url']);
	// echo $h;


	// $h = 'xxbxxbxxbxxbxx';

	$hPreFinal = explode('<table', $h);
	// print_r ($hPreFinal);
	$hFinal = explode('table>', $hPreFinal[1]);
	// print_r ($hFinal);

	echo '<table'.$hFinal[0].'table>';
}



?>