<?php
 session_start();
      require'inc/class.product.php';
      require'inc/class.database.php';
      require'inc/class.sessions.php';
      require'inc/functions.php';
if(isset($_POST['again'])){
	header("Location: index.php");

}
?>
<!DOCTYPE html>
<html>
 <head>
   <meta  charset="utf-8">
   <link rel="stylesheet" type="text/css"  href="css/styles.css"/>
   <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
 </head>
 <body>	
 	<header>
 		
 	</header>
 	<div class="message">
 		<?php echo $message; ?>
 	</div>
 	<div class="container">
 		<div class="receipt">
 			<?php
 			//function to print out a receipt
 			?>
 		</div>
 		<form>
 			<input type="submit" value="Beställ fler varor" name="again">
		</form>		
 	</div>
 	<footer>
 		
 	</footer>
 </body>
 </html>
