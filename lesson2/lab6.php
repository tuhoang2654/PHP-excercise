<!DOCTYPE html>
<html>
    <head>
        <title>
    
        </title>
    </head>
    <body>
        <?php
        function calculate($n1, $n2, $n3) {
            $result = ($n1 + $n2 + $n3) / 3;
            return $result;
        }
        echo "5 + 10 + 15 = " . calculate(5,10,15) . "<br>";
        ?>
    </body>
</html>