<?php

class Product{
private $quantity;
private $name;
private $price;
private $id;
private $pic;
  
public function set_pic($pict){
    $this->pic = $pict;
  }

public function set_all_attr($pid,$pname,$pprice,$pqua,$ppic){
  $this->id= $pid;
  $this->name= $pname;
  $this->price=$pprice;
  $this->quantity= $pqua;
  $this->pic=$ppic;
}

public function get_pic(){
  return $this->pic;
}

public function set_id($newid){
    $this->id = $newid;
}

public function get_id(){
  return $this->id;
}

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

public function update_product_quantity($sub, $theid){
  $newQuantity=$this->quantity-$sub;
  $this->set_quantity($newQuantity);
  $db= new Database;
  $db->update_quantity($this->quantity, $this->id);
}
public function calculate_price($quant, $price){

  $subtotal= $quant * $price;
  return $subtotal;
} 

}


?>