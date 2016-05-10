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
					
	<!-- för att kunna få navbar på sidan-->
	<nav class="navbar navbar-inverse">
	<!-- för att ha den inverse ikonen när man minskar sidans storlek-->
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

				<!--li klass kan inkludera ul och li , caret hämta den triangel brevid-->
			
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

		<div class="row">

			<?php 
				$pid = $_GET['id'];

// MySQL Database
require ("connect.php");

$query = "SELECT * FROM produkter WHERE produkt_id = '$pid'";
$result = mysqli_query($connection , $query);


while($row = mysqli_fetch_array($result)){
			$pro_model = $row['modell'];
			$pro_storlek = $row['storlek'];
			$pro_id = $row['produkt_id'];
			$pro_pris = $row['pris'];
			$pro_age = $row['age'];
			$pro_image = $row['images'];

          
   echo "
        <div class='col-xs-4'>
                    <img src='$pro_image' class='img-rounded img-responsive' alt='carpet''>
   		<div class='mattainfo'>

        <p><b> Model: </b>$pro_model</p>
        <p><b> Size: </b> $pro_storlek</p>
          <p><b> Age: </b> $pro_age</p>
            <p><b> Pris: </b> $pro_pris kr </p>
              <br>
          </div>
          </div>

   ";
}
   ?>


<form action="order2.php" method="post">
<p></p><p></p>
<b>Quantity should be between 1-3 </b>
<br>
<input type="number" name="quantity" min="1" max="3" required>
<br>
Name:<br> 

<input type="text" name="name" required>
<br>
E-mail: <br>
<input type="email" name="email" required>
<br><br>
<b>Delivery Adress: </b><br>
Gatuadress: <br>
<input type="text" name="gatuadress" required><br>

Postnummer: <br>
<input type="text" name="postnummer" required><br>

Postort: <br>
<input type="text" name="ort" required><br>
<br>
<input name='id' type='hidden' value='<?php echo $_REQUEST['id']; ?>'>  
 <input type="submit" class = "btn btn-defautl" value="Submit Order"><br>
</form>
    </div>
    	</body>


		<footer>	
			Copyright &copy; 2016  last uppdated:
			<?php echo date("Y-m-d H:i:s");
			?>
		</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> </script>
</html>