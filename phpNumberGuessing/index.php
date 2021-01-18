<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "\nLet's play a game. Guess what number I'm thinking of, between 1 and 10. After a few rounds, I'll tell you what percentage of the time you guessed correctly and whether you had a tendency to guess too high or too low. \n";
echo "\n";

function guessNumber()
{
  global $guess_high, $guess_low, $correct_guesses, $play_count;

  $play_count++;
  $rando = rand(1,10);

  echo "\nMake your guess... \n";
  $guess = readline(">> ");
  $guess = intval($guess);

  echo "This is round $play_count\nMy Number: $rando\nYour guess: $guess";

  if ($guess === $rando) {
    $correct_guesses++;
  } elseif ($guess > $rando) {
    $guess_high++;
  } elseif ($guess < $rando) {
    $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percent_correct = $correct_guesses / $play_count * 100;
echo "\nWe played $play_count rounds. You guessed correctly $percent_correct% of the time. \n";

if ($guess_high > $guess_low) {
  echo "When you guessed wrong, you tended to guess high. \n";  
} elseif ($guess_low > $guess_high){
  echo "When you guessed wrong, you tended to guess low.\n";
} else {
  echo "When you guessed wrong, you guessed too high or too low an equal number of times.";
};

