<?php
session_start();
$string = $_POST["sequencia"];

$verificados = [];
$string_final = [];
for($i = 0; $i < strlen($string); $i++ )
{
    if (in_array($string[$i], $verificados)) 
    { 
        
    }
    else
    {
        $a = '';
        for($y = 0; $y<substr_count($string, $string[$i]); $y++)
        {
            $a=$a.$string[$i];
        }
        array_push($string_final, $a);
        array_push($verificados, $string[$i]);
    }
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
<body>
    <div> 
        <div class="d-flex flex-row">
            <div>[</div>
            <?php foreach($string_final as $sf):?>
                <div><?=$sf?> </div>
            <?php endforeach; ?>
            <div>]</div>
        </div>
        <a href="main.php">Testar outra Pontuação</a>
    </div>    
</body>

</body>
</html>