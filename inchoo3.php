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
    if($i == $x-1 && $j == $y-1){
      echo ++$k;
    }
    echo '</td>';
}
    echo '</tr>';
}
echo '</table>';
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
