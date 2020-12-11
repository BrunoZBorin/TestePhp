<?php
session_start();
$jogadores = $_POST["pontuacao"];

$pontos = [0,0,0];


for($i=0; $i<strlen($jogadores); $i++)
{
    switch($jogadores[$i]){
        case "A":
            $pontos[0]+=1;
            break;
        case "B":
            $pontos[1]+=1;
            break;
        case "C":
            $pontos[2]+=1;
            break;
    }
}
$ana = $pontos[0];
$bruna = $pontos[1];
$caio = $pontos[2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<body class="mx-5">
    <div class="container"> 
        <h3>Ana : <?= $ana ?></h3>
        <h3>Bruna : <?= $bruna ?></h3>
        <h3>Caio : <?= $caio ?></h3>
        <a href="main.php">Testar outra Pontuação</a>
    </div>    
</body>

</body>
</html>