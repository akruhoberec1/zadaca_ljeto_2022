<?php

// specijalizirana za rad s nizovima
// indeksni - postoji for petlja način
$niz = [2,2,2,3,4,77];

foreach($niz as $e){
    echo $e. '<br />';
}

echo '<hr />';

// asocijativni nizovi
$niz = [
    'sifra'=>1,
    'naziv'=>'PHP'
];

foreach($niz as $key => $value){
    echo $key, ': ', $value, '<br />';
}

echo '<hr />';
foreach($niz as $value){ // kada imamo as $v tada je $v vrijednost (nemamo pristup ključu)
    echo $value, '<br />';
}

//sva ostala pravila za petlje vrijede i za foreach
// ne postoji beskonačna foreach petlja