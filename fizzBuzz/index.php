<?php
$counter = 0;

while ($counter <= 100) {
  if ($counter % 15 === 0){
    echo "Fizzbuzz, ";
  } elseif ($counter % 3 === 0 && $counter % 5 != 0) {
    echo "Fizz, ";
  } elseif ($counter % 5 === 0 && $counter % 3 != 0) {
    echo "Buzz, ";
  } else {
  echo $counter . ", ";
  }
  $counter ++;
}


// $output =[];
// for ($i=0; $i <= 100; $i++){
//     if ($i % 15 === 0){
//     array_push($output, "Fizzbuzz");
//   } elseif ($i % 3 === 0 && $i % 5 != 0) {
//     array_push($output, "Fizz");
//   } elseif ($i % 5 === 0 && $i % 3 != 0) {
//     array_push($output, "Buzz");
//   } else {
//     array_push($output, $i);
//   }
// }

// print_r($output);

// foreach($output as $value){
//   echo $value . "\n";
// }

$output =[];
for ($i=1; $i <= 100; $i++){
    if ($i % 15 === 0){
    array_push($output, "Fizzbuzz");
    break;
  } elseif ($i % 3 === 0 && $i % 5 != 0) {
    continue;
  } elseif ($i % 5 === 0 && $i % 3 != 0) {
    array_push($output, "Buzz");
  } else {
    array_push($output, $i);
  }
}

foreach($output as $value){
  echo $value . "\n";
}
