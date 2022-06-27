<?php
//init at least two 'Movie' obj and print their attributes value
require_once 'class/movie.php';
$movies = [
    new Movie('Hocus Pocus', 1993, 'Kenny Ortega', ['Bette Midler', 'Sarah Jessica Parker', 'Kathy Najimy', 'Omri Katz'], ['Fantasy', 'Commedy']),
    new Movie('Mamma Mia!', 2008, 'Phyllida Lloyd', ['Meryl Streep', 'Amanda Seyfried', 'Julie Walters', 'Christine Baranski', 'Pierce Brosnan', 'Colin Firth'], ['Musical', 'Commedy']),
    new Movie('Death Becomes Her', 1992, 'Robert Zemeckis', ['Meryl Streep', 'Goldie Hawn', 'Bruce Willis'], ['Fantasy', 'Commedy']),
    new Movie ('Doctor Strange in the Multiverse of Madness', 2022, 'Sam Raimi', ['Benedict Cumberbatch', 'Elizabeth Olsen', 'Chiwetel Ejiofor', 'Benedict Wong', 'Xochitl Gomez'], ['Fantasy', 'Action', 'Horror']),
    new Movie('The Devil Wears Prada', 2006, 'David Frankel', ['Meryl Streep', 'Anne Hathaway', 'Stanley Tucci', 'Adrian Grenier', 'Emily Blunt'], ['Drama', 'Commedy'])
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie-oop</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
            <li>
                <h3> <?= "title: {$movie->title}" ?> </h3>
                <p> <?= "production year: {$movie->year} so {$movie->getOld()}" ?> </p>
                <h4> <?= "director: {$movie->director}" ?> </h4>
                <h4> cast:
                    <?php foreach($movie->MainCast as $elm) { ?>
                    <?= $elm ?>
                    <?php } ?>
                </h4>
                <h5> genre:
                    <?php foreach($movie->genre as $elm) { ?>
                        <?= $elm ?>
                    <?php } ?>
                </h5>
            </li>
        <?php } ?>
    </ul>
</body>
</html>