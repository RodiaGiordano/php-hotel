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


$parking_required = !empty($_GET['check']);

$chosen_vote = $_GET['vote'] ?? '';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- form -->
    <div class="container my-5">
        <form method="get" action="./" class="d-flex justify-content-center align-items-center gap-3">
            <select class="form-select w-25" name="vote">
                <option value="" selected>Filtra per voto</option>
                <option value="1">1 stella</option>
                <option value="2">2 stelle</option>
                <option value="3">3 stelle</option>
                <option value="4">4 stelle</option>
                <option value="5">5 stelle</option>
            </select>
            
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
                <label class="form-check-label" for="exampleCheck1">Filtra per parcheggio disponibile</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Filtra</button>
        </form> 
    </div>
        
<!-- stampa tabelle -->
    <div class="container">
        
        <div class="row flex-wrap">
            <?php foreach($hotels as $hotel): ?>
                <?php if((!$parking_required || ($parking_required && $hotel['parking'])) && (!$chosen_vote || ($chosen_vote && $hotel['vote'] >= intval($chosen_vote)) )): ?>
                    <div class="col-3">

                        <table class="table table-bordered mb-5">
                            <?php foreach($hotel as $info => $value): ?>
                                <tr>
                                    <th scope="col" class="fs-bold"><?= $info ?></th>
                                    <td scope="col"><?= $value ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>

    </div>
</body>
</html>
    
    

                



    

        
            
    

    
    
    
    

        
           
           
           
           