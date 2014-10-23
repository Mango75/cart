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
	$cartArray=array();
	foreach($product as $objkey => $objvalue){
			if($objvalue>0){
			$db =new Database;
			$rows=$db->get_product_info($objkey);
			while($rowinfo=mysqli_fetch_array($rows)){
				$pro= new Product;
				$pro->set_all_attr($rowinfo['PrID'], $rowinfo['PrName'], $rowinfo['PrPrice'],$objvalue,$rowinfo['PrPic']);
				array_push($cartArray, $pro);
			    }

			}else{
			continue;
			}
		}
		if(isset($_SESSION['cart'])){
			foreach ($product as $key => $value) {
				# code... for updating use in_array function
				#or double loops
			}

		}
	$_SESSION['cart']=$cartArray;

}

function update_cart(){


}

?>