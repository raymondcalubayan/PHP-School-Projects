<?php
$movies = $_POST['movies'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ray's Movie Store</title>
  </head>
  <body>
    <h1>Ray's Movie Store</h1>
    <h2>Order Summary</h2> 
    <?php
    echo "<p>Movie Rented On ";
    echo date('H:i, jS F Y');
    echo "</p>";

    echo '<p>Your order summary: </p>';

    echo ($movies).' Thank you for renting <br />';

    define('PRICE', 5);

    $totalamount = PRICE;

    echo "Subtotal: $".number_format($totalamount,2)."<br />";
    
    $taxrate = 0.05;  // local sales tax is 5%
    $totalamount = $totalamount * (1 + $taxrate);
    echo "Total including tax: $".number_format($totalamount,2)."</p>";
    ?>  
  </body>
</html>
