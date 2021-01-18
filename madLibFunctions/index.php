<?php
function generateStory($singular_noun, $verb, $color, $distance_unit) 
{
  $story = "\nThe " . $singular_noun . "s are lovely, " . $color . ", and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I " . $verb . ",\nAnd $distance_unit to go before I " . $verb . ".\n";
  return $story;
}

echo generateStory(bee, crawl, yellow, meters);
echo generateStory(tree, grow, green, inches);
echo generateStory(car, drive, blue, yards);