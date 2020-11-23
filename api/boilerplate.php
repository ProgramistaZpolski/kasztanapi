<?php
/* Not intented to be run. Use only as a boilerplate */
header('Access-Control-Allow-Origin: *', false);
header('Content-Type: application/json', false);

// Code goes here

$counter_name = "requests.txt";

if (!file_exists($counter_name)) {
    $f = fopen($counter_name, "w");
    fwrite($f, "0");
    fclose($f);
}

$f = fopen($counter_name, "r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f);
