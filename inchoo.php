<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php require_once 'zaglavlje.php'; ?>
  </head>
<body>
    <div class="grid-container">
    <?php include_once 'izbornik.php'; ?>
    <!-- Start tijelo -->
    <div class="grid-x grid-margin-x" id="tijelo">
      <div class="cell">
        <div class="callout">
          Program će napraviti tablicu dimenzija dva unesena broja po x i y koordinati
        <?php 
         // ulaz
          // GET parametar x i y
          $x = isset($_GET['x']) ? $_GET['x'] : 0; //inline if
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
$zbroj=$x*$y;
for($i=0;$i<$x;$i++){
    echo '<tr>';
    for($j=0;$j<$y;$j++){
        echo '<td>';
        if(
            ($i===0 && $j===0)
            ||
            ($i===0 && $j===2)
            ||
            ($i===2 && $j===0)
            ||
            ($i===2 && $j===2)
        ){
            echo 'X';
        }else{
            echo 'O';
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
    <!-- End tijelo -->
    <?php 
    require_once 'podnozje.php'; ?>
    </div>
    <?php require_once 'jsskripte.php'; ?>
  </body>
</html>
