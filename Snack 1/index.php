<!-- 
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
  Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema. -->

<?php

$partite = 
  [
    [
      'squadra_casa' => 'Los Angeles Lakers',
      'squadra_ospite' => 'Golden State Warriors',
      'punti_casa' => 95,
      'punti_ospite' => 87
    ],
    [
      'squadra_casa' => 'San Antonio Spurs',
      'squadra_ospite' => 'Cleveland Cavaliers',
      'punti_casa' => 80,
      'punti_ospite' => 68
    ],
    [
      'squadra_casa' => 'Miami Heat',
      'squadra_ospite' => 'Boston Celtics',
      'punti_casa' => 78,
      'punti_ospite' => 47
    ],
    [
      'squadra_casa' => 'Chicago Bulls',
      'squadra_ospite' => 'Toronto Raptors',
      'punti_casa' => 87,
      'punti_ospite' => 70
    ],
    [
      'squadra_casa' => 'New York Knicks',
      'squadra_ospite' => 'Atlanta Hawks',
      'punti_casa' => 67,
      'punti_ospite' => 95
    ],
  ];

var_dump($partite);
var_dump($partite[0]['squadra_casa']);
var_dump(count($partite))
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack1</title>
</head>
<body>

  <ul>

    <?php for($i = 0; $i < count($partite); $i++): ?>
      <li>
        <?php
          echo $partite[$i]['squadra_casa'] .' - '. $partite[$i]['squadra_ospite'] .' | '. $partite[$i]['punti_casa'] .'-'. $partite[$i]['punti_ospite'];
        ?>
      </li> <br>
    <?php endfor ?>

  </ul>
  
</body>
</html>
