<!DOCTYPE html>
<html>
    <head>
        <title>
    
        </title>
    </head>
    <body>
    <?php
function isAllLowerCase($input) {
    return $input === strtolower($input);
}

// Example usage
$inputString1 = "hello world";
$inputString2 = "Hello World";

if (isAllLowerCase($inputString1)) {
    echo "The input string is all lowercase.";
} else {
    echo "The input string is not all lowercase.";
}

echo "\n";

if (isAllLowerCase($inputString2)) {
    echo "The input string is all lowercase.";
} else {
    echo "The input string is not all lowercase.";
}
?>
    </body>
</html>