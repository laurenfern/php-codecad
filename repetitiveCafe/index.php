<?php
$drinks = [
  Bourbon => 10,
  Scotch => 12,
  Water => 3
];

$pastries = [
  Fritter,
  Croissant,
  Donut
];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php 
foreach ($drinks as $name => $price):
?>
<li> <?=$name?> costs <?=$price?> </li>
<?php
endforeach;
?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php
for ($counter=0; $counter < count($pastries); $counter++):
?>
<li><?=$pastries[$counter]?></li>
<?php
endfor;
?>
</ul>
