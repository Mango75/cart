
<?php
 session_start();
      require'inc/class.product.php';
      require'inc/class.database.php';
      require'inc/class.sessions.php';
      require'inc/functions.php';
if(isset($_POST['confirm'])){
	
	$session=new Session;
	$session->stop_session();
	//function to
	$message="Tack för att du handlade, välkommen åter!<br/><a href=\"index.php\">Tillbaka till butiken</a>";

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

 			?>
 		</div>
 		<input type="submit" value="Slutför order" name="confirm">
		<a href="" 
 	</div>
 	<footer>
 		
 	</footer>
 </body>
 </html>
<?php 




















?>