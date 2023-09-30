<!DOCTYPE html>
<html>
    <head>
        <title>
    
        </title>
    </head>
    <body>
        <?php
        $d1 = strtotime("December 24");
        $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
        echo "There are " .$d2 . " days until 24th of December";
        ?>
    </body>
</html>