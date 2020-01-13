<?php
session_start();

require("funkcije.php");

check();

prviDeo("Brisanje instrumenata", $_SESSION['tip']);

echo "Brisanje instrumenata.";
?>

<style><?php include "stilovi.css"; ?></style>
	
<?php
drugiDeo();
?>