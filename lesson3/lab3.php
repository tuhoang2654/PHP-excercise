<!DOCTYPE html>
<html>
    <head>
        <title>
    
        </title>
    </head>
    <body>
        <?php
        $mylife = fopen("data.txt","r") or die("unable to open data.txt");
        while(!feof($mylife)) {
            echo fgets($mylife) . "<br>";
        }
        fclose($mylife);
        ?>
    </body>
</html>