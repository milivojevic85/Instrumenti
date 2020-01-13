<?php
session_start();

require("funkcije.php");

check();

prviDeo("Dodavanje instrumenata", $_SESSION['tip']);

echo "Dodavanje novih instrumenata.";
?>

<style><?php include "stilovi.css"; ?></style>
	
<?php
drugiDeo();	
?>