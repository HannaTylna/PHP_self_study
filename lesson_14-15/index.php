<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php 
        if(define('NUMBER', 1)){
            echo 'Constant NUMBER is created and has a value - 1';
            echo "<br>";
        }
        // if(defined('NUMBER')){
        //     echo 'Constant NUMBER is already created';
        // }
        //define('NUMBER', 1, true);// true не чуттєвий до реєстру (великі або малі літери)
        // echo NUMBER;
    ?>
    <?php 
        $num = mt_rand(1, 10);
        $name = "VALUE($num)";
        define($name, $num);
        echo constant($name);
        echo "<br>";
    ?>
    <?php 
        echo 'Files name ' . __FILE__ . '<br>';
        echo 'A row ' . __LINE__ . '<br>';
        echo "<br>";
    ?>
    <?php 
        echo 'File path ' . __DIR__ . '<br>';
        require_once '../lesson_13/point.php'; // require_once __DIR__ . '/../lesson_13/point.php';

        $p1 = new Point;
        $p1->x = 10;
        $p1->y = 34;

        $p2 = new Point;
        $p2->x = 3;
        $p2->y = 10;

        $distance = sqrt((pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y),2)));

        echo "Distance - $distance";
        echo "<br>";
    ?>
    <?php 
        class ConstClass {
            const NAME = "str";
        }
        if(defined('ConstClass::NAME')){
            echo "Constant is defined";
        } else {
            echo "Constant is not defined";
        }
    ?>
</body>
</html>