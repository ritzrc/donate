<?php
$no = 0;
$amt = 0;
if (file_exists("log.txt")) {	
	$array = explode('-', file_get_contents('log.txt'));
    $no = $array[1];
    $amt = $array[0];
}
$url = "/loktra/?amt=" . $amt . "&no=" . $no ;
echo "<script>location.replace('" . $url . "');</script>";
?>
