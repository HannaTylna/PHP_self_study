<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes, objects</title>
</head>
<body>
    <?php 
        require 'point.php';
        $point1 = new Point;
        $point1->x = 13;
        $point1->y = 2;
        echo $point1->x;

        echo "<br>";

        $point2 = new Point;
        $point2->x = 5;
        $point2->y = 25;
        echo $point2->x;

        unset($point2);
        echo $point2->x;

        echo "<br>";

        echo Point::$num . '<br>';

        $first = $second = 2;
        $first = 3;
        echo $first . '<br>' . $second;

        echo "<br>";

        $first = new Point;
        $first->x=3;
        $first->y=3;

        $second = $first; //$second = clone $first;
        $second->x=5;
        $second->y=5;

        echo "x: {$first->x}, y: {$first->y}";
        echo "<br>";
        echo "<br>";
        echo "x: {$second->x}, y: {$second->y}";

        echo "<br>";
        $num1 = 8;
        $num2 = &$num1;
        $num2 = 12;
        echo $num1;
        echo "<br>";
        echo "<br>";
    ?>
</body>
</html>