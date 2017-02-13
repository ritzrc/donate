<?php
echo "<script>alert('hello');</script>";
$myfile = fopen("log.txt", "w") or die("Unable to open file!");
$array = explode('.', file_get_contents('log.txt'));
$no = $array[1] + 1;
$amt = $array[0] + $_POST['amt'];
$msg = "Thank you for you genorousity!";
fwrite($myfile, $amt.'-'.$no);
?>