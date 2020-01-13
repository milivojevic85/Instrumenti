<?php
session_start();

require("funkcije.php");

check();

prviDeo("Spisak instrumenata", $_SESSION['tip']);

echo "Spisak dostupnih instrumenata.";
?>

<style><?php include "stilovi.css"; ?></style>
	
<?php
drugiDeo();	
?>