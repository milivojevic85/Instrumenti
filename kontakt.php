<?php
session_start();

require("funkcije.php");

if(isset($_SESSION['tip'])) {
	prviDeo("Kontakt",$_SESSION['tip']);
} else {
	prviDeo("Kontakt","");
}

echo "Kontakt strana preduzeca.";
?>

<style><?php include "stilovi.css"; ?></style>
	
<?php
drugiDeo();	
?>