<!doctype html>
<html>
<html lang="sv-SE">
<head>
	<meta charset="UTF-8";>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel = "stylesheet"  type = "text/css"  href = "https://fonts.googleapis.com/css?family=Tangerine" >
		 <link  rel = "stylesheet"  typ = "text / css"  href = "https://fonts.googleapis.com/css?family= Font + namn " >

		<link type="text/css" rel="stylesheet"  href="styles.css"/> 
<!-- Latest compiled and minified CSS in bayad bala bashe bad baghiye bayad akhare body bashan -->
		<link rel="stylesheet" href="css/bootstrap.css">

<title>Persian Carpet</title>
</head>
	<body>
				<div class="container">

		<h4 class="frDel"> Free Delivery over 300$</h4>
					
	<!-- fÃ¶r att kunna fÃ¥ navbar pÃ¥ sidan-->
	<nav class="navbar navbar-inverse">
	<!-- fÃ¶r att ha den inverse ikonen nÃ¤r man minskar sidans storlek-->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		</div>

		<!--menu items i navbar-->
		<div class="collapse navbar-collapse" id="mainNavBar">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="tercond.html">Terms and Conditions</a></li>

				<!--li klass kan inkludera ul och li , caret hÃ¤mta den triangel brevid-->
			
					</ul>

				</div>
			</nav>
		<div class="jumbotron">
			<div class="row">
					<div class="text-center">
						<h1 class="logo">Persian Carpets</h1>
							<p> </p>
					</div>
				</div>
			</div>
<div class= "information">
<h4>Your Order Specification:</h4>
</div>
<?php
$quantity = $_POST['quantity'];
$name= $_POST['name'];
$email= $_POST['email'];
$gatuadress= $_POST['gatuadress'];
$postnummer= $_POST['postnummer'];
$ort= $_POST['ort'];
$id=$_POST['id'];

$date = date('Y-m-d H:i:s');

require ("connect.php");

$query = "SELECT * FROM produkter WHERE produkt_id = '$id'";
$result = mysqli_query($connection , $query);

while($row = mysqli_fetch_array($result)){
			$pro_model = $row['modell'];
			$pro_storlek = $row['storlek'];
			$pro_pris = $row['pris'];
			$pro_age = $row['age'];
			$pro_image = $row['images'];
          
   echo "
         <div class='col-xs-4'>
             <img src='$pro_image' class='img-rounded img-responsive' alt='carpet''>
        </div>
        <div>
        <p><b> Model: </b>$pro_model </p>
        <p><b> Size: </b> $pro_storlek</p>
          <p><b> Age: </b> $pro_age</p>
            <p><b> Pris: </b> $pro_pris kr </p>
        </div>
   ";
}

echo "<b>The order will be sent to the following adress:</b> <br><br>";
echo "<b>Your Name:</b> $name<br><br>";
echo "<b>Your Email:</b> $email<br><br>";
echo "<b>Your adress:</b> $gatuadress $postnummer  $ort <br><br>";




//require("connect.php");
				$sql = "INSERT INTO kunder (name, email, gatuadress, postnummer, ort) 
				VALUES ('$name', '$email', '$gatuadress', '$postnummer' ,'$ort')";
				mysqli_query($connection, $sql);



//require ("connect.php");
//Select... Reading from database to fetch the
$query = "SELECT kund_id FROM kunder WHERE email = '$email'";
$result = mysqli_query($connection , $query);
while($row = mysqli_fetch_array($result)){
$kund_id = $row['kund_id'];
}

//require("connect.php");

$sql= "INSERT INTO ordrar(kund_id,produkt_id,datum,quantity) 
VALUES('$kund_id','$id','$date','$quantity')"; 
if (mysqli_query($connection , $sql)){
	echo "done";

}
else{
	echo "error". mysqli_error($connection);
}
//mysqli_query($connection , $sql);



$to1    = "$email";
$rubrik  = "Order Details";
$message = "Your order has been placed!
            \nYou have entered the following details: \n \n    
              Your Name: $name \n
              Your Address: $adress \n
              Your Email: $email \n
              ";
$headers1 = "From:info@persiancarpet.se" ;


$to2   = "roksanamonsef@gmail.com";
$rubrik  = "Order Details";
$message2="The following order has been placed:
 		From: $name \n
  		Email: $email \n
         To the following address: $adress \n ";
$headers2 = "From: $to1";



 mail($to1, $rubrik, $message, $headers1);
 mail($to2, $rubrik, $message2, $headers2);

echo "Email has been sent!";


?>
<br><i>We will contact you in 24 hours.</i>
<hr>
		

</div>
		<footer>	
			Copyright &copy; 2016  last uppdated:
			<?php echo date("Y-m-d H:i:s");
			?>
		</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> </script>
</div>
	</body>
</html>	