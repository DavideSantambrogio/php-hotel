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
     
    // Filtra gli hotel in base al parcheggio
    $filteredHotels = $hotels;
    if (isset($_GET['filter_parking'])) { 
        $filterParking = $_GET['filter_parking'];
        if ($filterParking === 'with-parking') {
            $filteredHotels = array_filter($hotels, function ($hotel) {
                return $hotel['parking'] == true;
            });
        } elseif ($filterParking === 'no-parking') {
            $filteredHotels = array_filter($hotels, function ($hotel) {
                return $hotel['parking'] == false;
            });
        }
    }

    // Filtra gli hotel in base al voto


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
        <div class="d-flex">
            <!-- Filtra per parcheggio: -->
            <form action="" method="get" class="mt-3">
                <div class="form-group">
                    <label for="filter_parking">Filtra per parcheggio:</label>
                    <select class="form-control" id="filter_parking" name="filter_parking">
                        <option value="">Tutti</option>
                        <option value="with-parking">Con parcheggio</option>
                        <option value="no-parking">Senza parcheggio</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filtra</button>
            </form>

            <!-- Filtra per voto: -->


        </div>
        

        
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
                <?php foreach ($filteredHotels as $cur_hotel) { ?>
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