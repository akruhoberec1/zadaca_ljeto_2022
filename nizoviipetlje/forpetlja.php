<?php
// 5 puta jedno ispod drugog ispiši Hello
echo 'Hello', '<br />';
echo 'Hello', '<br />';
echo 'Hello', '<br />';
echo 'Hello', '<br />';
echo 'Hello', '<br />';

// Ovo iznad nije rješenje dobre prakse
echo '<hr />';
// sintaksa for(od kuda; do kuda; uvećanje/umanjenje)


for ($i=0;$i<5;$i++){
    echo 'Hello','<br />';
}

echo '<hr />';

// for petlja MORA imati varijablu koja mijenja vrijdenost
for($i=0;$i<25;$i++){
    echo $i+1, '<br />';
}

echo '<hr />';

for($i=100;$i>0; $i-=7){
    echo $i, '<br />';
}

echo '<hr />';
$sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;
}
echo $sum, '<br />';

echo '<hr />';

// Domaća zadaća: s CSS lijepo stilizirati tablicu množenja
echo '<table>';
for($i=1;$i<=10;$i++){
    echo '<tr>';
    for($j=1;$j<=10;$j++){
        echo '<td>',$i*$j,'</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<hr />';

// petlja se može preskočiti/nastaviti

for($i=0;$i<10;$i++){
    if($i===2){
        continue;
    }
    echo $i, '<br />';
}

echo '<hr />';

// petlja se može nasilno prekinuti
for($i=0;$i<10;$i++){
    if($i===5){
        break;
    }
    echo $i, '<br />';
}

echo '<hr />';

// rad s nizovima
// for radi s indeksnim nizovi
$niz = [2,3,4,'Osijek',true,2.99];

for($i=0;$i<count($niz);$i++){
    echo $niz[$i], '<br />';
}

echo '<hr />';

// beskonačne petlje
//for($i=0;$i>-1;$i++){ NIJE BESKONAČNA PETLJA
//}

for(;;){
    echo 2;
    break;
}


// u for se ne mora ući
$i=10; //ovo je unio čovjek
for($t=$i;$t<5;$t++){
    echo $t;
}


// samo za napredne
	//$i, $s=0; for($i=1;$i<=100;$i++) $s+=$i;

	// $i, $s; for($i=1, $s=0;$i<=100; $s+=$i, $i++);
//
		// $i=1, $s=0; for( ; $i<=100; $i++){ $s+=$i; }
//
//		 $i, $s=0; for($i=1; ; $i++){ if($i<=100) $s+=$i; else break;}
//
//		 $i, $s=0; for($i=1;$i<=100;){ $s+=$i; $i++;}
//
//		 $i, $s=0; for($i=1; ; ){ if($i<=100) {$s+=$i; $i++;} else break;}
//
//		 $i=1, $s=0; for( ; $i<=100 ; ){ $s+=$i; $i++;}
//
//		  $i=1, $s=0; for( ; ; $i++){if($i<=100)  $s+=$i; else break;}
//
//		 $i=1, $s=0; for( ;  ; ){if($i<=100) {$s+=$i; $i++;} else break;} 
//		
//