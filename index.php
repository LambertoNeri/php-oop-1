<?php

class Movie {
    public string $title;
    public string $duration;
    public string $type;


    public static int $counter = 0;

    public function __construct(string $title, string $duration, string $type)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->type = $type;
        self::$counter += 1;
    }
}

$movies = [
    new Movie(
        'Terminator', 
        '120:00', 
        'Action'
    ),
    new Movie(
        'Titanic', 
        '140:00', 
        'Love Story'
    ),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <div class="container">
        <ul><?php
			foreach ($movies as $movie) { ?>
				<li><?= $movie->title ?> - <?= $movie->duration ?> - <?= $movie->type ?></li><?php
			} ?>
        </ul>
    </div>
</body>
</html>