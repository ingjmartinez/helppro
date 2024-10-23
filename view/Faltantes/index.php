<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
    <!DOCTYPE html>
    <html>
    <?php require_once("../MainHead/head.php"); ?>
    <title>HelpPro</>::Consultar Ticket</title>
    </head>

    <body class="with-side-menu">

        <?php require_once("../MainHeader/header.php"); ?>

        <div class="mobile-menu-left-overlay"></div>

        <?php require_once("../MainNav/nav.php"); ?>

        <!-- Contenido -->
        <div class="page-content">
            <div class="container-fluid">

                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3>Consultar Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Consultar Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="box-typical box-typical-padding">
                    <iframe title="INFORME DE FALTANTE" width="600" height="373.5" src="https://app.powerbi.com/view?r=eyJrIjoiOWFjMGI2ZmUtMzAyNy00ZDY1LTllZjMtMTc2OWEyZDI5NjUwIiwidCI6IjU0OGNhODQyLTdiMzctNDEzNi1hYTY1LTZkMDljYzRlYzc0OSIsImMiOjJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>

        <!-- Contenido -->

        <?php require_once("modalasignar.php"); ?>
        <?php require_once("../MainJs/js.php"); ?>

        <script type="text/javascript" src="consultarticket.js"></script>

        <!-- <script type="text/javascript" src="consultarticket.js"></script> -->
    </body>

    </html>
<?php
} else {
    header("Location: " . Conectar::ruta() . "index.php");
}
?>