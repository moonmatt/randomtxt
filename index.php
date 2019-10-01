<?php
// RANDOM LINE SHOWER FROM TEXT FILE
// BY moonmatt

// GETS THE CONTENT FROM THE FILE WITH STRINGS
$f_contents = file("lines.txt"); 
// COUNTS THE NUMBER OF LINES IN THE FILE AND SELECTS A RANDOM ONE,
// THEN TRANSFORMS IT INTO A STRING
$line = $f_contents[rand(0, count($f_contents) - 1)];
// REMOVES USELESS BLANK SPACES
$line = trim($line); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RandomTxt - Shows random lines from text file</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
</head>

<body>
    <!-- WRITES IN THE MIDDLE OF THE PAGE A RANDOM LINE FROM TEXT FILE -->
    <div class="text"><?php echo $line; ?></div>

    <!-- CREDITS -->
    <a href="https://moonmatt.cf"><div class="credits">coded by <i class="fas fa-moon"></i> moonmatt</div></a>

    <!-- LINKS -->
    <a href="https://github.com/moonmatt/randomtxt"><div class="links">project on <i class="fab fa-github"></i></div></a>
</body>
</html>


