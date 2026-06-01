<?php
require_once './Classes/movie.php';
require_once './Classes/genre.php';

$fantasy = new Genre("Fantasy", "Lorem impusm lorem lorem ipsum lorem", "film correlato");
$azione = new Genre("Azione", "Lorem impusm lorem lorem ipsum lorem", "film correlato");


$matrix = new Movie("Matrix", 1995, "dsiufhf.url", $azione,"loremi ipsum lorem ipsum lorem ipsum");
$casper = new Movie("Casper", 1990, "dsiufhf.url", $fantasy,"loremi ipsum lorem ipsum lorem ipsum");
 
var_dump($matrix);
var_dump($casper);

echo $matrix->filmRecenti();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
    <title>Movies</title>
</head>
<body>
    <main>
        <section class="container">
            <h1> Movies</h1>
        </section>
    </main>
</body>
</html>