<!DOCTYPE html>
<html>
    <head>
        <title>
    
        </title>
    </head>
    <body>
    <?php
function isPalindrome($input) {
    $input = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $input)); // Remove non-alphanumeric characters and convert to lowercase
    $reverse = strrev($input); // Reverse the input string

    return $input === $reverse; // Check if the input string is equal to its reverse
}

// Example usage
$inputString = "A man, a plan, a canal, Panama";

if (isPalindrome($inputString)) {
    echo "The input string is a palindrome.";
} else {
    echo "The input string is not a palindrome.";
}
?>
    </body>
</html>