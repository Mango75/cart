<?php 

  function convert_to_object_array(){
      $base=new Database;
      $theObjects=array();
      $theResult=$base->get_products();
      while($row=mysqli_fetch_array($theResult)){
        $object= new Product;
        $object->set_all_attr($row['PrID'], $row['PrName'], $row['PrPrice'],$row['PrQuantity'],$row['PrPic']);
        array_push($theObjects, $object);
      }
    return $theObjects;
     }
function add_products_to_cart($product){
	$newCart=array();
	foreach ($product as $item=>$value){
		if($value==0||$value=='add'|| $value=='confirm'|| $value=='update'){
			continue;
		}else{
			$newCart[$item]=$value;
		}
	}
	$_SESSION['cart']=$newCart;
	$message=print_r($_SESSION['cart']);
/*	$allProducts=convert_to_object_array();
	echo "before :".print_r($allProducts);
	$theCart;
	foreach($allProducts as $cartitems){

		foreach($newCart as $k => $v){
			if($k==$cartitems->get_id()){
				$cartq=$cartitems->get_quantity();
				$newq= $cartq->$v;
				$cartitems->set_quantity($newq);
				array_push($theCart, $cartitems);
			}
			else{
				continue;
		 	}
		}
	}	
	$message=print_r($theCart);
*/
}

function update_cart(){


}

?>