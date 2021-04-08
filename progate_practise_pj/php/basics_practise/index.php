<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Progate</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
    </head>
    <body>
        <h1>PHP</h1>;
        <?php
            echo '<h2>Beginner</h2>';
            // h2 converted to HTML

            //array
            $colors=array('Red','Blue','Yellow');
            echo $colors[0];
            $colors[]='White';
            echo $colors[3];
            
            //associated array
            $scores = array(
                'Math' => 70,
                'Language' => 90,
                'Science' => 80,
            );

            echo $scores['Science'];

            $scores['Science'] += 5;
            echo $scores['Science'];
            
            //for loop
            for ($i = 51; $i <= 100; $i++) {
                echo $i.'<br>';
            }

            //while loop
            $i2 = 2;
            while ($i2 <= 100) {
                if ($i2 % 2 == 0){
                    echo $i2.'<br>';
                }
                $i2++;
            }

            //break 
            for ($i3 = 3; $i3 <= 100; $i3+= 3) {
                if ($i3 > 50) {
                    break;
                }
                echo $i3.'<br>';
            }

            //continue loop 
            for ($i4 = 1; $i4 <= 20; $i4++) {
                if ($i4 % 3 == 0) {
                    continue;
                }
                echo $i4.'<br>';
            }
            
            //foreach
            foreach ($scores as $key => $value) {
                echo $key.': '.$value.' ';
            }
            echo '<br>';


            //function practise p1

            //strlen function returns the number of characters in a string
            $language = 'PHP';
            echo strlen('Progate');
            echo '<br>';
            echo strlen($language);
            echo '<br>';

            //count returns the number of elements in an array
            echo count($colors);
            echo '<br>';

            echo rand(1,4);
            echo '<br>';

            //making a function
            function hello() {
                echo 'Hello, world!';
            }
            hello().'<br>';

            function printRectangleArea($height, $width) {
                echo $height * $width;
            }
            printRectangleArea(5, 10).'<br>';

            //return values
            function getCircleArea($radius) {
                return $radius * $radius * 3;
            }

            $circleArea = getCircleArea(5);
            echo $circleArea.'<br>';
            
        ?>
    </body>

</html>