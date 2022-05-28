<?php
//getting post data
$details=$_POST;
//file name to write to
$filename="./userdata.csv";
//open write strean
$myfile = fopen($filename, "w") or die("Unable to open file!");
//store in csv
fputcsv($myfile, $details);
//close and clean stream 
fclose($myfile);
//print array
print_r($details);