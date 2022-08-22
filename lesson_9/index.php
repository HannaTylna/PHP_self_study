<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of variable</title>
</head>
<body>
    <?php 
        $str = 'fhdkpoc';
        $number = $str - 12;
        echo $number;
    ?>
    <?php 
        echo "<br>";
    ?>
    <?php 
        $var = 0.0;
        if($var){
            echo "Variable is true";
        } else {
            echo "Variable is false";
        }
    ?>
    <?php 
        echo "<br>";
    ?>
    <?php 
        $float = 4.3;
        $number = (int)$float;
        echo $number;
    ?>
    <?php 
        echo "<br>";
    ?>
    <?php 
        $num = 20;
        $f = (float)($num/2) - (int)($num/2);
        if($f){
            echo "An odd number!";
        } else {
            echo "An even number!";
        }
    ?>
</body>
</html>