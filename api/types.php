<?php
header('Access-Control-Allow-Origin: *', false);
header('Content-Type: application/json', false);

echo '[
    {
        "name": "Castanea crenata",
        "commonName": "kasztan japoński",
        "origin": "Japonia",
        "originShort": "JP",
        "uses": ["ozdobne", "jadalne", "barwierska"],
        "description": "Naturalnie występuje w Japonii, w Polsce rzadko uprawiany jako roślina ozdobna. ",
        "img": ["https://upload.wikimedia.org/wikipedia/commons/6/6f/Japanese_Chestnut04.jpg"],
        "imgThanks": ["By Apple2000 - Fotografia własna, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=4921066"]
    },
    {
        "name": "Castanea dentata",
        "commonName": "kasztan amerykański",
        "origin": "Stany Zjednoczone Ameryki",
        "originShort": "USA",
        "uses": ["ozdobne", "jadalne", "lecznicze", "surowiec drzewny"],
        "description": "Występuje we wschodniej części Ameryki Północnej. W Stanach Zjednoczonych zasięg występowania ciągnie się pasem od Missisipi przez Wirginię Zachodnią po Maine, w Kanadzie spotykany w prowincji Ontario.",
        "img": ["https://upload.wikimedia.org/wikipedia/commons/6/6c/Castanea_dentata_JPG1a.jpg", "https://upload.wikimedia.org/wikipedia/commons/9/96/American_chestnut_flowers_2_%28Sault%29.JPG", "https://upload.wikimedia.org/wikipedia/commons/d/d0/American_Chestnut.JPG"],
        "imgThanks": ["By Jean-Pol GRANDMONT - travail personnel, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=2830009", "By Fungus Guy - Praca własna, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=12657469", "By Oryginalnym przesyłającym był Peatcher z niemieckiej Wikipedii - Na Commons przeniesiono z de.wikipedia z pomocą narzędzia CommonsHelper., CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=10555698"]
    },
    {
        "name": "Castanea mollissima",
        "commonName": "kasztan chiński",
        "origin": "Chiny",
        "originShort": "CH",
        "uses": ["ozdobne", "jadalne"],
        "description": "Naturalnie występuje w Chinach, w Polsce rzadko uprawiany w ogrodach botanicznych. ",
        "img": ["https://upload.wikimedia.org/wikipedia/commons/8/8a/Chinese_Chestnut_%28Castanea_mollissima%29_leaf_detail_springtime.jpg"],
        "imgThanks": ["By MONGO - Praca własna, Domena publiczna, https://commons.wikimedia.org/w/index.php?curid=6868244"]
    },
    {
        "name": "Castanea sativa",
        "commonName": "kasztan jadalny",
        "origin": "N/A",
        "originShort": "N/A",
        "uses": ["jadalne"],
        "description": "Kiedyś gatunek występujący tylko na południe od Alp, rozpowszechniony przez Rzymian w Europie Zachodniej i Słowacji. Obecnie rozpowszechniony w basenie Morza Śródziemnego, Azji Mniejszej i na Kaukazie. W Polsce rosną głównie na Pomorzu Zachodnim i Dolnym Śląsku. Lokalnie występować mogą populacje zadomowione, znajdujące się poza uprawą. Obecność w kulturze i symbolice - Kasztan jadalny symbolizuje mądrą przezorność",
        "img": ["https://upload.wikimedia.org/wikipedia/commons/4/4b/Castanea_sativa_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-173.jpg", "https://upload.wikimedia.org/wikipedia/commons/3/37/Castanea-sativa.JPG", "https://upload.wikimedia.org/wikipedia/commons/5/50/Frucht_der_Edelkastanie.jpg"],
        "imgThanks": ["By Franz Eugen Köhler, Köhler&#039;s Medizinal-Pflanzen - List of Koehler Images, Domena publiczna, https://commons.wikimedia.org/w/index.php?curid=255513", "By Sten Porse - own work by Sten Porse, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=19866", "By Benjamin Gimmel, BenHur - Praca własna, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=468004"]
    },
    {
        "thanks": "Dziękujemy za korzystanie z KasztanAPI",
        "source": "Wikipedia"
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
