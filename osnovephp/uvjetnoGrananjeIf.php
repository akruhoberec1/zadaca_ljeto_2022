<?php
// if je binarno grananje
// pretpostavka je kako korisnik unosi vrijednost 2
$i = 2;

$uvjet = $i > 0;

echo gettype($uvjet), '<hr />';

// if radi s boolean tipom podatka
if($uvjet){
    echo "$i je veće od 0", '<hr />'; // pod " ispisuje se vrijednost varijable
    echo '$i je veće od 0', '<hr />'; // pod ' ne ispisuje se vrijednost varijable
}

if($i>0){
    echo $i . ' je veće od 0', '<hr />'; // . je operator nadoljepljivanja
}

// u if granu se ulazi ako je true a u else granu ako je false
if($i>2){
    echo 'OK', '<hr />';
}else{
    echo 'Edunova', '<hr />';
}

$t=0;
if($i>2){
    $t=1;
}else if($i<-2){
    $t=2;
}else{
    $t=3;
}
echo $t, '<hr />';


// ovo ne treba raditi
if($i>2)
echo $i;
else
echo 0, '<hr />';
echo 2, '<hr />'; // ovo nije dio else grane
// ako nema {} tada se if/else odnosi samo na 1. sljedeću liniju
//

// ugnježđivanje if naredbe
$i=1; $j=2;
if($i==1){ // == je operator provjere jednakosti po vrijednosti
    if($j===2){ // === je operator provjere jednakosti po tipu i po vrijednosti
        echo 'Osijek', '<hr />';  
    }
}

// logički operatori and (&), or (|) i not (!)
if($i===1 & $j===2){
    echo 'Osijek', '<hr />';
}


// razlika između & i &&
// & provjeravaju se oba uvjeta
// && u slučaju da prvi uvjet ne prođe ne provjerava se drugi


// razlika između | i ||
// | provjeravaju se oba uvjeta
// || u slučaju da prvi uvjet prođe ne provjerava se drugi


if(isset($_GET['x'])){
    $x=$_GET['x'];
}else{
    $x=2;
}
// identično gornjim 5 linija koda
$x = isset($_GET['x']) ? $_GET['x'] : 2; // inline if