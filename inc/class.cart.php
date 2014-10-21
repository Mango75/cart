<?php

class Cart{
private $quantity;
private $name;
private $price;
private $subTotal;
private $total;  


public function set_quantity($quan){
    $this->quantity = $quan;
  }

public function get_quantity(){
  return $this->quantity;
  }

public function set_price($price){
    $this->price = $price;
  }

public function get_price(){
  return $this->price;
  }

public function set_name($name){
    $this->name = $name;
  }

public function get_name(){
  return $this->name;
  }
}


?>