<?php
header('Access-Control-Allow-Origin: *', false);
header('Content-Type: application/json', false);
$kasztanprice = 0;
if ($_GET["v"] < 30000) {
    for ($i = 0; $i < $_GET["v"]; $i++) {
        $kasztanprice += 15;
    }
} else {
    $kasztanprice = "Prosimy o kontakt z KasztanSupport w celu uzyskania wagi";
}

$kasztanpound;

if ($_GET["ag"] == "true") {
    $kasztanpound = $kasztanprice * 0.002;
    $agurl = "https://www.tomscott.com/analogizer/api/?q=" . $kasztanpound . "+pounds";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $agurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
    $json = curl_exec($ch);
    if (!$json) {
        echo curl_error($ch);
    }

    curl_close($ch);

    $data = json_decode($json, true);
    $kasztanprice = $data['text'];
}

echo '[
    {
        "weight": "' . $kasztanprice  . '"
    },
    {
        "thanks": "Dziękujemy za korzystanie z KasztanAPI"
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
