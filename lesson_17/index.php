<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators in PHP</title>
</head>
<body>
    <?php 
        echo 4 ** 2;
        echo '<br>';
        echo 8 % 3;
        echo '<br>';
        echo (int)(8 / 3);
        echo '<br>';
        if(9 % 2) echo 'A number is odd';
        else echo ' A number is even';
        echo '<br>';
    ?>
    <?php 
        echo 16 ** 0.5;
        echo '<br>';
        $var = 5;
        echo $var++;// ++$var;
        echo '<br>';
        echo $var;
    ?>
    <?php 
        $num .= $var;   // $num = $num . $var;
        $num += $var;   // $num = $num + $var;
        $num -= $var;   // $num = $num - $var;
        $num *= $var;   // $num = $num * $var;
        $num /= $var;   // $num = $num / $var;
        $num %= $var;   // $num = $num % $var;
        $num **= $var;  // $num = $num ** $var;
        $num++;
    ?>
</body>
</html>