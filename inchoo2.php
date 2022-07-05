<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zaglavlje.php'; ?>
  </head>
<body>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start body -->
    <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell">
        <div class="callout">
          Program će napraviti tablicu dimenzija dva unesena broja po x i y koordinati
        <?php 
         // inputs
          $x = isset($_GET['x']) ? $_GET['x'] : 0; 
          $y = isset($_GET['y']) ? $_GET['y'] : 0; 
        
        ?>
        <form action="" method="get">

        <label>
          x
          <input type="text" name="x" value="<?=$x?>">
        </label>
        <label>
          y
          <input type="text" name="y" value="<?=$y?>">
        </label>

        
        <input class="medium-6 cell" type="submit" value="Odradi">

        </form>


<?php
// pravljenje tablice

echo '<table border="1">';

$k=0;

for($i=0;$i<$x;$i++){
    echo '<tr>';
    for($j=0;$j<$y;$j++){
        echo '<td>';
        }
        
        echo '</td>';
      }
    echo '</tr>';
    
echo '</table>';

$niz = array();
$iskoristeno = array();

for ($i=0;$i<$x;$i++){
  $niz[$i] = array();
  for($j=0;$j<$y;$j++)
  $niz[$i][$j] = '-';
}

//grid koji je iskorišten
for($i=-1;$i<=$x;$i++){
  $iskoristeno[$i] = array();
  for ($j = -1;$j<=$y;$j++){
    if($i == -1 || $i == $x || $j == -1 || $j == $y)
    $iskoristeno[$i][$j] = true;
    else
    $iskoristeno[$i][$j] = false;
  }
}

$k=0;
$i=0;
$j=0;
$smjer=0;
while(true) {
  $niz[$i][$j] = $k ++;
  $iskoristeno[$i][$j] = true;
}

switch($smjer){
  case 0: // ide gore po x osi pa ide desno
    $i++;
    if ($iskoristeno[$i][$j]){
      $i--; $j++;
      $smjer=1;
    }
    break;
  case 1: // ide gore lijevo
    $j++;
    if ($iskoristeno[$i][$j]){
    $i--; $j--;
    $smjer=2;
    }
    break;
  case 2: // ide dolje lijevo
    $i++;
    if ($iskoristeno[$i][$j]){
    $i++; $j--;
    $smjer=3;
    }
    break;
  case 3: // ide dolje desno
    $i++;
    if ($iskoristeno[$i][$j]){
    $i++; $j++;
    $smjer=4;
    }
    break;
}


  ?>


          
        </div>
      </div>
    </div>
    <!-- End body -->
    <?php 
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>
