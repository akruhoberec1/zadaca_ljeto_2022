<?php

// DZ isprobati https://www.php.net/manual/en/ref.array.php

$niz = [2,3,2,3,23,2,2,2,3,2,2];

echo '<pre>';
print_r($niz);
echo '</pre>';

//promjena
$niz[4]=7;

echo '<pre>';
print_r($niz);
echo '</pre>';
// brisanje elementa niza zajedno s indeksom
//unset($niz[4]);
// renumerira indexe
array_splice($niz,4,1);

echo '<pre>';
print_r($niz);
echo '</pre>';

sort($niz);

echo '<pre>';
print_r($niz);
echo '</pre>';

$niz = [
    'sifra'=>2,
    'naziv'=>'PHP programiranje',
    'cijena'=>5999.99,
    'verificiran'=>false
];

echo '<pre>';
print_r($niz);
echo '</pre>';

echo $niz['naziv'], '<hr />';


$o = (object) $niz;

echo '<pre>';
print_r($o);
echo '</pre>';

echo $o->naziv, '<hr />';