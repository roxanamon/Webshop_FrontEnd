<!doctype html>
<html>
<html lang="sv-SE">
<head>
	<meta charset="UTF-8";>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
	<link  rel = "stylesheet"  type = "text/css"  href = "https://fonts.googleapis.com/css?family=Tangerine" >
		 <link  rel = "stylesheet"  typ = "text / css"  href = "https://fonts.googleapis.com/css?family= Font + namn " >
		<link type="text/css" rel="stylesheet"  href="styles.css"/> 
<!-- Latest compiled and minified CSS in bayad bala bashe bad baghiye bayad akhare body bashan -->
		
<title>Persian Carpet</title>
</head>
	<body>
		<div class="container">
		<h4 class="frDel"> <br><b>Free Delivery over 300$</b></h4>			
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
			<div class= "information">
			<h1>Persian Hand Made Carpets' Collection </h1>
			<p><strong>100% Persian hand tied carpets directly imported! save at least 30% to 50%<br>
		 	Explore over 10 PIECES PAD DIRECTLY FROM PERSIA<br> 
		 	ALL OF CARPETS are carefully selected and imported to Sweden by us<br> 
			100% SATISFACTION GUARANTEED</strong><br><br>
			</div>	
         <div class='row'>          

<?php
require("connect.php");
$query = "SELECT * FROM produkter";
$result = mysqli_query($connection, $query);

		while ($row = mysqli_fetch_array($result)) {
			$pro_id = $row['produkt_id'];
			$pro_model = $row['modell'];
			$pro_storlek = $row['storlek'];
			$pro_pris = $row['pris'];
			$pro_age = $row['age'];
			$pro_image = $row['images'];

			echo 
				"<div class='col-sm-4'>
				<div class='well'>
	            <img src='$pro_image' class='img-rounded img-responsive' alt='carpet'>
	               <div class='mattainfo'>

				<p> model: $pro_model</p>

				<p> size: $pro_storlek<p>
				<p> age: $pro_age<p>
				<p> price: $pro_pris<p>
				<a href='order.php?id=$pro_id' class='btn btn-info' role='button'>Order now</a>
				</div>
				</div>
				</div>";
		}

		?>
		
		<hr>				
			</div>
		<footer>	
			Copyright &copy; 2016  last uppdated:
			<?php echo date("Y-m-d H:i:s"); ?>
		</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"> </script>
</div>
	</body>
</html>