<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo $riel . "\n" . $kyat . "\n" . $krones . "\n" . $lek . "\n";

$riel_rate = 0.00025;
$kyat_rate = 0.00075;
$krones_rate = 0.11;
$lek_rate = 0.0098;

$riel_to_USD = $riel * $riel_rate;
$kyat_to_USD = $kyat * $kyat_rate;
$krones_to_USD = $krones * $krones_rate;
$lek_to_USD = $lek * $lek_rate;

echo $riel . " riel is $" . $riel_to_USD . " US dollars. \n";
echo $kyat . " kyat is $" . $kyat_to_USD . " US dollars. \n";
echo $krones . " krones is $" . $krones_to_USD . " US dollars. \n";
echo $lek . " lek is $" . $lek_to_USD . " US dollars. \n";

$fee = 4;
$total = $riel_to_USD + $kyat_to_USD + $krones_to_USD + $lek_to_USD + $fee;

echo "Our total in US dollars is $" .$total;
