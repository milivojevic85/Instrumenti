<?php
session_start();

require("funkcije.php");
?> 

<style><?php include "stilovi.css"; ?></style>

<?php
if(isset($_SESSION['tip'])) {
	prviDeo("Pocetna strana",$_SESSION['tip']);
} else {
	prviDeo("Pocetna strana","");
}

echo "Dobrodosli na pocetnu stranu.";

$korisnicko = "";
$lozinka = "";
$poruka = "";


if(isset($_POST['korisnicko'])) {
	$korisnicko = $_POST['korisnicko'];
}
if(isset($_POST['lozinka'])) {
	$lozinka = $_POST['lozinka'];
}
?>



<form method="POST">
	<p>User: <input type="text" name="korisnicko" value="<?php echo $korisnicko; ?>" /></p>
	<p>Pass: <input type="text" name="lozinka" value="<?php echo $lozinka; ?>" /></p>
	<p><input type="submit" value="Log-in" /></p>
</form>
	
<?php
if($korisnicko == "admin" && $lozinka == "admin") {
	$poruka = "Cestitamo, uspesno ste se ulogovali.";
	$_SESSION['tip'] = "admin";
	$_SESSION['trenutno'] = $korisnicko;
	header('Location: index.php');
	exit;
} else {
	$poruka = "Nije uspesna kombinacija, pokusajte ponovo.";
}
if(!isset($_POST['korisnicko']) && !isset($_POST['lozinka'])) {
	$poruka = "";
}
echo "<br><p style='color: red;'>$poruka</p>";
drugiDeo();	
?>
