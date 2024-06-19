<?php
    date_default_timezone_set('America/Santo_Domingo');
	error_reporting(E_ALL);
	ini_set('ignore_repeated_errors', TRUE);
	ini_set('display_errors', FALSE);
	ini_set('log_errors', TRUE);
	ini_set('error_log', 'debug.log');
	
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
    <title>HelpPro</>::Home</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once("../MainNav/nav.php");?>

		<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
			Nuevo Ticket.
		</div>
	</div>

		<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="home.js"></script>


	
</body>
</html>
<?php
 } else {
	header("Location: " . Conectar::ruta() . "index.php");

 }
?>
