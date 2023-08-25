<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books and Authors</title>
</head>
<body style="background-color:#AFE3C0; font-family: 'roboto'">
    <h1 style= "color:#8963BA">Books and Writers</h1>
    <hr>
    <?php
        $books = array("The Adventures of Huckleberry Finn","Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
        $author = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
        $realname= array("Samuel Clemens","Eric Blair","Charles Dodson", "Theodor Geisel" );

        for($i =0; $i < count($books); ++$i){
            echo "<p>The Real name of $author[$i], the author of \"$books[$i]\", is $realname[$i].</p>";
            echo "<p>The title \"$books[$i]\" contains ", strlen($books[$i])," characters and ", str_word_count($books[$i]), " words.</p>";

        }
    ?>

</body>
</html>