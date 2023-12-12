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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">  
    
</head>
<body>
    

    <div class="container mt-5">
        <h1>Lista Hotel</h1>
        <table class="table table-bordered mt-5">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal Centro</th>
                </tr>
            </thead>
            
            <tbody>
                <?php for ($i = 0; $i < count($hotels); $i++) {
                $cur_hotel = $hotels[$i]; ?>
                    <tr>                
                        <td> <?php echo $cur_hotel['name']; ?></td>
                        <td> <?php echo $cur_hotel['description']; ?></td>
                        <td> 
                            <?php
                                if ($cur_hotel['parking'] == true) {
                                    echo 'Parcheggio disponibile';
                                } else {
                                    echo 'Parcheggio non disponibile';
                                }
                            ?>
                        </td>
                        <td> <?php echo $cur_hotel['vote']; ?></p>
                        <td> <?php echo $cur_hotel['distance_to_center']; ?> Km</td>
                    </tr> 
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>