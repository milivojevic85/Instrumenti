<?php
session_start();

require("funkcije.php");

?>

<style><?php include "stilovi.css"; ?></style>
	
<?php
session_destroy();

header('Location: index.php');
?>