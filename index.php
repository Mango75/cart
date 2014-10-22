<?php session_start(); 
    
      require'inc/class.product.php';
      require'inc/class.database.php';
      require'inc/class.sessions.php';
      require'inc/functions.php';
          $DB = new Database;
      if(isset($_POST['add'])){
        add_products_to_cart($_POST);
        $message="Produkter lagda i varukorgen";
        }
        elseif (isset($_POST['update'])) {
          //function to update cart
          $message="Ändringar utförda";
        }
        elseif (isset($_POST['confirm'])) {
          //function to destroy
          header("Location: confirm.php");
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
    <?php
     echo $message;
     ?>
    </div>
  <div class="container">
    <div class="products">
      <form method="post">
        <table>
          <tr>
            <th>Id</th>
            <th>Produkt</th>
            <th>Pris</th>
            <th>Lagersaldo</th>
          </tr>

          <?php
           $theResult=$DB->get_products();
           while($row=mysqli_fetch_array($theResult,MYSQLI_ASSOC)){
            echo "<tr> <td><div class=\"product-id\"><p>".$row['PrID']."</p><img src=\"".$row['PrPic']."\"/></div></td><td>".$row['PrName']."</td><td>".$row['PrPrice']."</td><td><select name=\"".$row['PrID']."\">";
            for($i=0; $i<=$row['PrQuantity']; $i++){ 
              echo "<option>".$i."</option>";
          }
          echo "</select></td></tr>";
           }
           ?>
          </table>
      <input type="submit" name="add" value="Lägg i varukorg"/>
    </form>
</div>
    <div class="cart">
      <h3>Varukorg</h3>
      <form method="post">
        <table>
        <th>
          <td>Antal</td>
          <td>Namn</td>
          <td>Pris</td>
          <td>Subtotal</td>
        </th>
    <?php


    

    ?>
  </table>
      <input type="submit" name="update" value="Uppdatera varukorg"/>
      <input type="submit" name="confirm" value="Slutför order"/>
      </form>
    </div>
  </div>
  <footer></footer>
  </body>
</html>