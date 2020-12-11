<?php
session_start();
$multiplicacao = $_POST["multiplicacao"];

$resultado = $multiplicacao;
while($multiplicacao != 1)
{
    $multiplicacao --;
    $resultado = $multiplicacao * $resultado;
}
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
        <h3><?= $resultado ?></h3>
        <a href="main.php">Testar outro Valor</a>
    </div>    
</body>

</body>
</html>