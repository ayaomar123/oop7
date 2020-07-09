<?php
class Person{
  //Properites
  private $name;
  private $eyeColor;
  private $age;

public static $drinkingAge = 21;

  public function __construct($name, $eyeColor, $age ){
    $this->name = $name;
    $this->eyeColor = $eyeColor;
    $this->age = $age;
  }


  //get_class_methods
  public function setname($name){
    $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }

  public static function setDrinkingAge($newDA){
    self::$drinkingAge = $newDA;
  }
}
?>
