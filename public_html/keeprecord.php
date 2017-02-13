<?php
$no = 0;
$amt = 0;
$msg = "Thank you for you genorousity!";
if (file_exists("log.txt")) {
    $array = explode('-', file_get_contents('log.txt'));
    $no = intval($array[1]) + 1;
    $amt = intval($array[0]) + intval($_POST['amt']);
}
$myfile = fopen("log.txt", "w") or die("Unable to open file!");
fwrite($myfile, $amt . '-' . $no);
fclose($myfile);
$url = "/loktra/?amt=" . $amt . "&no=" . $no . "&msg=" . $msg;
echo "<script>location.replace('" . $url . "');</script>";
?> 