<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

for($i = 1; $i <= 100; $i++){
    if($i % 15 === 0){
        echo "cakepi <br>";
    }elseif($i % 5 === 0){
        echo "pi <br>";
    }elseif($i % 3 === 0){
        echo "cake <br>";
    }else{
        echo $i . "<br>";
    }
}  
        
        ?>
    
</body>
</html>