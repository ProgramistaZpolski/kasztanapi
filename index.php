<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KasztanAPI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>KasztanAPI</h1>
    <h2>GET api/price.php?v={liczba kasztanów}<br>
    Podaje koszt kaszanów</h2><br>
    <h2>GET api/weight.php?v={gramy kasztanów}&ag=false<br>
    Podaje wagę kaszanów</h2><br>
    <h2>GET api/price.php?v={gramy kasztanów}&ag=true<br>
    Podaje wagę kasztanów, i tłumaczy je po angielsku - Korzysta z API Analogizer Toma Scotta</h2><br><br>
    <h1><?php echo file_get_contents("./api/requests.txt"); ?> Requestów</h1>
    <footer>API made by ProgramistaZpolski</footer>
</body>
</html>