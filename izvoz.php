<?php
session_start();

require("funkcije.php");

check();

prviDeo("Izvoz instrumenata", $_SESSION['tip']);

echo "Opcije za izvoz instrumenata.";
?>

<style><?php include "stilovi.css"; ?></style>
	
<?php
drugiDeo();	
?>