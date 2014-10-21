
<?PHP 
class Database{
private $conne;
private $dbhost = 'localhost';
private $dbuser = 'root';
private $dbpass = 'root';
private $dbname = 'webtest';


public function open_connection(){
 	$this->conne = mysqli_connect($this->dbhost, $this->dbuser,$this->dbpass,$this->dbname );
 	if(!$this->conne){
 		die("Uppkoppling mot databasen misslyckades ".mysqli_error($this->conne));

 	}
}
//medtod för att se om databasen ger resultat
function confirm_query($result_set){
 			if(!$result_set){
					die("Det fick inget svar ". mysql_error());
					}
 }
//metod att lägga till produkter i databasen	
public function insert_product($name, $price, $quantity){
	$this->open_connection();
	$sql= "INSERT INTO  Product (PrName ,  PrPrice ,  PrQuantity ) VALUES ('{$name}', {$price} ,{$quantity});";
	mysqli_query($this->conne, $sql);
	mysqli_close($this->conne);

}
//Metod för att hämta namn och pris
public function get_product_info($theid){
 	$this->open_connection();
 	$sql= "SELECT PrName,PrPrice FROM  Product WHERE PrID =".$theid.";";
 	$result=mysqli_query($this->conne, $sql);
 	return $result;
 	 mysqli_close($this->conne);
}

//Medtod att hämta alla produkter
public function get_products(){
 	$this->open_connection();
 	$sql= "SELECT * FROM  Product";
 	$result=mysqli_query($this->conne, $sql);
 	return $result;
 	 mysqli_close($this->conne);
}


//Metod för att uppdatera lagersaldot i databasen 
public function update_quantity($sub, $theid){
  $this->open_connection();
  $sql="UPDATE Product SET PrQuantity = {$sub} WHERE PrID={$theid}";
  mysqli_query($this->conne,$sql);
  mysqli_close($this->conne);
}
}
?>