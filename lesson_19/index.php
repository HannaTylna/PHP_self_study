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
        $x = 1;
        $y = 5;

        echo $x < $y;
        echo '<br>';
        echo $x <= $y;
        echo $x > $y;
        echo $x >= $y;

        echo $x == $y;
        echo '<br>';
        echo $x != $y;
        echo '<br>';
        echo $x <> $y;
        echo '<br>';
        echo $x === $y;
        echo '<br>';
        echo $x !== $y;
        echo '<br>';
        echo $x <=> $y;
        echo '<br>';
        echo '<br>';
    ?>
    <?php 
        echo "Examples:";
        echo '<br>';

        echo 1 > 0; //1
        echo '<br>';
        echo 1 > 1; //
        echo '<br>';
        echo 1 >= 1; // 1
        echo '<br>';
        echo 1 < 0; //
        echo '<br>';
        echo 1 < 1; //
        echo '<br>';
        echo 1 <= 1;// 1
        echo '<br>';
        echo 1 == 0; //
        echo '<br>';
        echo 1 == 1; // 1
        echo '<br>';
        echo 1 != 0; // 1
        echo '<br>';
        echo 1 != 1; //
        echo '<br>';
        echo 0 == '8qes';// 
        echo '<br>';
        echo 0 == '';// 1
        echo '<br>';
        echo 0 == 'Hello';// 1
        echo '<br>';
        echo 0 == null;// 1
    ?>
</body>
</html>