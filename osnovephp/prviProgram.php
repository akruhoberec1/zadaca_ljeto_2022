<?php

// čitati o blok dijagramima:https://www.google.com/search?q=blok+dijagram+programiranje&sxsrf=ALiCzsYOk9sDplS3RW65TTO_RRgfOn__BQ:1656344671428&tbm=isch&source=iu&ictx=1&vet=1&fir=wXmDrrfwqxhfPM%252CY4RRF94dDl_j0M%252C_%253BPfttGFgXpSKs1M%252CNqFmsfgBWuPz8M%252C_%253B1YHyV5CGiFM-AM%252COknoxK6sgp7_vM%252C_%253BbuQap2g34y7-WM%252COknoxK6sgp7_vM%252C_%253Bpt_jpFDAp6KzGM%252C96j5jAYQe45yuM%252C_%253BgWSe9T2IMXUSbM%252Ckw25Sn2n26uNSM%252C_%253Bmhx8fBFkqqpcrM%252COknoxK6sgp7_vM%252C_%253BD6Bx2VabfrJXUM%252CqLQuCggChOsLVM%252C_%253BY-zafmO6830oVM%252CbARIaMKgBOrjJM%252C_%253BNhkYOFJTnF_hLM%252CjoArAjA4oqQ2HM%252C_&usg=AI4_-kSvoCBfqqtECkQSpXYQB-jDjgeoZg&sa=X&ved=2ahUKEwj_84_e_M34AhXVNuwKHVL8DvUQ9QF6BAgJEAE#imgrc=PfttGFgXpSKs1M

// ulaz
// GET parametar x i y
$x = isset($_GET['x']) ? $_GET['x'] : 0; //infline if
$y = isset($_GET['y']) ? $_GET['y'] : 0; 

// obrada
$rez = $x + $y;
$rez *= 100;
$rez = $rez + 10;

//izlaz
echo $rez;

