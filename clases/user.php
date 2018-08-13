<?php


class user
{
  private $id;
  private $name;
  private $email;
  private $address;
  private $password;
  private $image;

  function __construct($id,$name,$email,$address,$password,$picture)
  {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->address = $address;
    $this->password = $password;
    $this->picture = $picture;
  }

 //Function validate
 //Function register
 //Function login

public function getId(){
  return $this-> $id;
}
public function getName(){
  return $this-> $name;
}
public function getEmail(){
  return $this-> $email;
}
public function getAddress(){
  return $this-> $address;
}
public function getPassword(){
  return $this-> $password;
}
public function getPicture(){
  return $this-> $picture;
}










 ?>
