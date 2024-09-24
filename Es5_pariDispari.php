<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        
    </body>
</html>

<?php
    $n = rand(1, 100);
    if ($n %2 == 0){
        $str = "<p>Il numero $n è pari</p>";
    } else {
        $str = "<p>Il numero $n è dispari</p>";
    }
    echo $str;
?>