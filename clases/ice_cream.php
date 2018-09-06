<?php

<<<<<<< HEAD
class ice_cream extends modelo
{
  public $table = 'ice_creams';
  public $columns = ['flavour', 'calories', 'size_id', 'image', 'price'];
}
=======

class ice_cream {

  private $id;
  private $title;
  private $image;
  private $description;
  private $flavour;
  private $size;
  private $calories;
  private $price;

  function __construct($id, $title, $image, $description, $flavour, $size, $calories, $price){

  $this->id=$id;
  $this->title=$title;
  $this->image=$image;
  $this->description=$description;
  $this->flavour=$flavour;
  $this->size=$size;
  $this->calories=$calories;
  $this->price=$price;

}


public function getId() {
    return $this->id;
}
public function getTitle() {
    return $this->title;
}
public function getImage() {
    return $this->image;
}
public function getDescription() {
    return $this->description;
}
public function getFlavour() {
    return $this->flavour;
}
public function getSize() {
    return $this->size;
}
public function getCalories() {
    return $this->calories;
}
public function getPrice() {
    return $this->price;
}

}

 ?>
>>>>>>> origin/master
