<?php
$details=$_POST;
$filename="./userdata.csv";
$myfile = fopen($filename, "w") or die("Unable to open file!");
fputcsv($myfile, $details);
fclose($myfile);
print_r($details);