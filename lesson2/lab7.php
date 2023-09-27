<!DOCTYPE html>
<html>
    <head>
        <title>
    
        </title>
    </head>
    <body>
    <?php
function findNonUniqueEmails($emails) {
    $uniqueEmails = array();
    $nonUniqueEmails = array();

    foreach ($emails as $email) {
        if (in_array($email, $uniqueEmails)) {
            if (!in_array($email, $nonUniqueEmails)) {
                $nonUniqueEmails[] = $email;
            }
        } else {
            $uniqueEmails[] = $email;
        }
    }

    return $nonUniqueEmails;
}

// Example usage
$emailList = array(
    'john@example.com',
    'jane@example.com',
    'john@example.com',
    'adam@example.com',
    'jane@example.com',
    'tu@gmail.com',
    'tu@gmail.com',
);

$nonUniqueEmails = findNonUniqueEmails($emailList);

echo "Non-unique email addresses: ";
foreach ($nonUniqueEmails as $email) {
    echo $email . ", ";
}
?>
    </body>
</html>