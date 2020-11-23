<?php
header('Access-Control-Allow-Origin: *', false);
header('Content-Type: application/json', false);
$kasztanprice = 0;
if ($_GET["v"] < 300000) {
    $kasztanadder = $_GET["v"] / 15;
    $kasztanprice += $kasztanadder * 0.6;
} else {
    $kasztanprice = "Prosimy o kontakt z KasztanSupport w celu uzyskania ceny";
}

echo '[
    {
        "price": "' . $kasztanprice  . '"
    },
    {
        "thanks": "Dziękujemy za korzystanie z KasztanAPI",
        "waluta": "Dane podane w złotówkach"
    }
]';


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
