<?php 
    require_once __DIR__ . '/Classes/Movie.php';

    $movieOne = new Movie("The Shawshank Redemption", 1994, "Frank Darabont");
    $movieTwo = new Movie("Inglourious Basterds", 2009, "Quentin Tarantino");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <h1>Movies:</h1>
        <ul>
            <h3><?php echo $movieOne->getTitle(); ?></h3>
            <li><?php echo $movieOne->getYear(); ?></li>
            <li><?php echo $movieOne->getDirector(); ?></li>
        </ul>
        <ul>
            <h3><?php echo $movieTwo->getTitle(); ?></h3>
            <li><?php echo $movieTwo->getYear(); ?></li>
            <li><?php echo $movieTwo->getDirector(); ?></li>
        </ul>
</body>
</html>