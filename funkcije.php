<?php 
	function prviDeo($naslov, $tip) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $naslov;?></title>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1 id="naslov" style="margin-bottom:0;">Prodavnica instrumenata</h1>
		</div>

		<?php 
		if ($tip == "admin") {
			meniAdministrator();
		} else {
			meniPosetilac();
		}
		?>
		
		<div id="content">
		<?php
			if(isset($_SESSION['trenutno'])) {
				echo "Korisnik: ".$_SESSION['trenutno']."<br>";
			}
	}
	
	function drugiDeo() {
	?>
		</div>
		<div id="footer">
			Prodavnica instrumenata &copy; 2020
		</div>
	</div>
</body>
</html>

	<?php } 
	
	function check() {
		if(!isset($_SESSION['trenutno'])) {
			header('Location: index.php');
			exit;
		}
	}
	
	function meniAdministrator() {
	?>
		<div class="topnav">
			<a class="active" href="index.php">POCETNA</a>
			<a href="instrumenti.php">INSTRUMENTI</a>
			<a href="dodavanje.php">DODAVANJE</a>
			<a href="brisanje.php">BRISANJE</a>
			<a href="izvoz.php">IZVOZ</a>
			<a href="kontakt.php">KONTAKT</a>
			<a href="logout.php">LOG OUT</a>
		</div>

	<?php 
	} 
	function meniPosetilac() {
	?>
		<div class="topnav">
			<a class="active" href="index.php">POCETNA</a>
			<a href="kontakt.php">KONTAKT</a>

		</div>
		
	<?php 
	} 
	?>


