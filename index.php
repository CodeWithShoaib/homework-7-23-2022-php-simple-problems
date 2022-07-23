<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    
<?php 
echo "<center>";
for($i=0; $i<=6; $i++){
    echo "* <br>";
    if($i==2){
        for($j=0; $j<=8; $j++){
            echo "*";
        }
    }   
    
}
// echo "</center>";   

    //   *
    //   *
    //   *
    // *****
    //   *
    //   *
    //   *

?>
<?php
echo "<br>";

// 12345
// 678910
// 1112131415
// 167181920
for($i=1; $i<=20; $i++){
    echo $i;   
    if($i%5==0){
        echo "<br>";
    } 
}
    
    
    





?>
    
</body>
</html>

