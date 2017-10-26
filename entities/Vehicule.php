<?php

// VERIF TYPE
declare(strict_types=1);


// VEHICULE
class Vehicule{

  protected $type;
  protected $numberWheels;
  protected $color;
  protected $price;


// CONSTRUCTEUR
public function __construct($data){
  $this -> hydrate($data);
}


// HYDRATATION
public function hydrate($data){

  foreach ($data as $key => $value){
    $method = 'set'.ucfirst($key);

    if (method_exists($this, $method)){
      $this->$method($value);
      }
    }
  }

  // GETTERS
  public function getType(){
    return $this->type;
  }

  public function getNumberWheels(){
    return $this->numberWheels;
  }

  public function getColor(){
    return $this->color;
  }

  public function getPrice(){
    return $this->price;
  }


  // SETTERS
  public function setType( string $type){
    $this->type = $type;
  }

  public function setNumberWheels( int $numberWheels){
      $numberWheels = intval($numberWheels);
      $this->numberWheels = $numberWheels;
  }

  public function setColor( string $color){
      $this->color = $color;
  }

  public function setPrice( int $price){
      $price = intval($price);
      $this->price = $price;
  }



}







 ?>
