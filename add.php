<?php 	
 session_start();

 if (isset($_POST['addprod'])) {
 	require 'includes/connect.php';
 	$product_name =$_POST['product_name'];
 	$product_price = $_POST['product_price'];
 	$product_stocks = $_POST['product_stocks'];

 	$tmpname = 



 	$addproducts = $con ->query("INSERT INTO products (product_name,product_price,product_stocks) VALUES ('$product_name','$product_price','$product_stocks')")or die($con -> error);
 	?>
 	<script type="text/javascript">
 		alert("Succesfully Added!");
 		window.open("home.php","_self");
 	</script>
 	<?php 	


 }

 ?>