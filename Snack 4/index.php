
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$array = [];
while(count($array) < 15){
  $number = rand(0, 100);
  if(!in_array($number, $array)){
    $array[] = $number;
  }
};
var_dump($array);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>

  <ul>
    
      <?php
        for($i = 0; $i < count($array); $i++):
          echo "<li>$array[$i]</li>";
        endfor;
      ?>

  
  </ul>
  
</body>
</html>