<?php
class StringUtils {
  public static function secondCase($string){
    $string = strtolower($string);
    if (strlen($string) >=2) {
      $string[1] = strtoupper($string[1]);
    }
    return $string;
  }
}

class Pajamas {
  private $owner = "none";
  private $fit = "average";
  private $color = "brown";
  function __construct($owner, $fit, $color){
    $this -> owner = StringUtils::secondCase($owner);
    $this -> fit = $fit;
    $this -> color = $color;    
  }
  public function describe(){
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }
  public function setFit($new_fit){
    $this->fit = $new_fit;
  }
}


$chicken_PJs = new Pajamas("CHICKEN", "ok", "gold");
echo $chicken_PJs->describe();

$chicken_PJs->setFit("really tight");
echo $chicken_PJs->describe();

class ButtonablePajamas extends Pajamas {
  private $button_state = "unbuttoned";
  public function describe() {
    return parent::describe() . " They also have buttons which are currently $this->button_state .";
  }
  public function toggleButtons(){
    if ($this->button_state === "unbuttoned"){
      $this->button_state = "buttoned";
    } else {
      $this->button_state = "unbuttoned";      
    }
  }
}

$moose_PJs = new ButtonablePajamas("Moose", "loose", "plaid");

echo $moose_PJs->describe();

$moose_PJs->toggleButtons();

echo $moose_PJs->describe();
