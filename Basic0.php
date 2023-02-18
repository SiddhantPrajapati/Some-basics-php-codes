<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        echo "Hello chaman";
        ?>
        <?php
        echo "Hello chaman again";
        //secreat algorithm]
        $var1 = 32;
        $var2 = 67;
        echo "<br>";
        echo $var1 + $var2;

        //operators in php
        $check = (true) and (true);
        echo var_dump($check);
        ?>
        <?php
            define('PI',3.14);
            //Data types
            $var = "This is string";
            echo var_dump($var);
            echo "<br>";
            $var = 76;
            echo var_dump($var);
            echo "<br>";
            $var = 5.87;
            echo var_dump($var);
            echo "<br>";
            $var = false;
            echo var_dump($var);
            echo "<br>";
            echo PI*2*5;
        ?>
    </div>
</body>
</html>