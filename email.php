<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body style="background-color: mint">
    <h2>Email Validator</h2>
    <h3>List of invalid emails:</h3>
    <!-- PHP block -->
    <?php
        $emailaddr = array("john.smith@php.test", "mary.smith.mail.php.example","john.jones@php.invalid", "alan.smithee@test","jsmith456@example.com","jsmith456@test","mjones@example", "mjones@example.net", "jane.a.doe@example.org");

        //functions
        function validateAddr($addr) {
            if(strpos($addr,'@')!== FALSE && strpos($addr, '.') !== FALSE){
                return TRUE;

            } else {
                return FALSE;
            }
        }
        foreach($emailaddr as $addr){
            if (validateAddr($addr) == FALSE){
                echo "<p>The email address <em>$addr</em> does not apper to be valid";
            }
        }

    ?>
</body>
</html>