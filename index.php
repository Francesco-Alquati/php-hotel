<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli hotel</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">name</th>
                        <th scope="col">description</th>
                        <th scope="col">parking</th>
                        <th scope="col">vote</th>
                        <th scope="col">distance to center</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hotels as $hotel): ?>
                        <tr>
                            <td><?= $hotel['name'];  ?></td>
                            <td><?= $hotel['description']; ?></td>
                            <td><?= $hotel['parking'] ? 'Sì' : 'No' ;?></td>
                            <td><?= $hotel['vote'];?>/5</td>
                            <td><?= $hotel['distance_to_center']; ?> km</td>
                        </tr>
                        <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>