<?php

function magic8Ball()
{
  echo "\nAsk me a question. I'll tell you what I know. \n";
  $question = readline(">> ");
  echo "\nSo you want to know: \n$question \nHere is the truth: ";
  $magic = rand(0,19);
  // echo $magic;

switch ($magic) {
  case 0:
    echo "\nIt is certain.";
    break;
  case 1:
    echo "\nIt is decidedly so.";
    break;
  case 2:
    echo "\nWithout a doubt.";
    break;
  case 3:
    echo "\nYes - definitely.";
    break;
  case 4:
    echo "\nYou may rely on it.";
    break;
  case 5:
    echo "\nAs I see it, yes.";
    break;
  case 6:
    echo "\nMost likely.";
    break;
  case 7:
    echo "\nOutlook good.";
    break;
  case 8:
    echo "\nYes.";
    break;
  case 9:
    echo "\nSigns point to yes.";
    break;
  case 10:
    echo "\nReply hazy, try again.";
    break;
  case 11:
    echo "\nAsk again later.";
    break;
  case 12:
    echo "\nBetter not tell you now.";
    break;
  case 13:
    echo "\nCannot predict now.";
    break;
  case 14:
    echo "\nConcentrate and ask again.";
    break;
  case 15:
    echo "\nDon't count on it.";
    break;
  case 16:
    echo "\nMy reply is no.";
    break;
  case 17:
    echo "\nMy sources say no.";
    break;
  case 18:
    echo "\nOutlook not so good.";
    break;
  case 19:
    echo "\nVery doubtful.";
    break;
  }
}

magic8Ball();
echo "\n \n";
magic8Ball();
echo "\n \n";
magic8Ball();
