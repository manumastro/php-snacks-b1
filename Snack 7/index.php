<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$alunni = [
  [
    'Nome' => 'Giuseppe',
    'Cognome' => 'Verdi',
    'voto_matematica' => 6,
    'voto_italiano' => 8,
    'voto_storia' => 9,
    'voto_scienze' => 7,
    'voto_inglese' => 8
  ],
  [
    'Nome' => 'Mario',
    'Cognome' => 'Rossi',
    'voto_matematica' => 7,
    'voto_italiano' => 6,
    'voto_storia' => 9,
    'voto_scienze' => 10,
    'voto_inglese' => 8
  ],
  [
    'Nome' => 'Giovanni',
    'Cognome' => 'Bianchi',
    'voto_matematica' => 5,
    'voto_italiano' => 4,
    'voto_storia' => 6,
    'voto_scienze' => 9,
    'voto_inglese' => 8
  ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  <ul>
    <?php
      for($i = 0; $i < count($alunni); $i++):
    ?>  
      <li>
        <?php
          echo $alunni[$i]['Nome'] .' '. $alunni[$i]['Cognome'] .' | '. 'La media dei voti è: '.
          $media_voti = ($alunni[$i]['voto_matematica'] + $alunni[$i]['voto_italiano'] + $alunni[$i]['voto_storia'] + $alunni[$i]['voto_scienze'] + $alunni[$i]['voto_inglese']) / 5 ;
        ?>
      </li>
    <?php
      endfor; 
    ?>    
    
  </ul>
</body>
</html>