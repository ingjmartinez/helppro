<?php
if ($_SESSION["rol_id"] == 1) {
?>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="..\Home\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="..\NuevoTicket\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Nuevo Ticket</span>
                </a>
            </li>
            <li class="blue-dirty with-sub">
                <span>
                    <i class="glyphicon glyphicon-th"></i>
                    <span class="lbl">Consultar Ticket</span>
                </span>
                <ul>
                    <li>
                        <a href="..\ConsultarTicket\?tipo=1">
                            <span class="lbl">Tickets Abiertos</span>
                        </a>
                    </li>
                    <li>
                        <a href="..\ConsultarTicket\?tipo=2">
                            <span class="lbl">Tickets Cerrados</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="blue-dirty">
                <a href="..\Faltantes\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Reportes BI</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
} else {
?>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="..\Home\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Inicio</span>
                </a>
            </li>
            <li class="blue-dirty">
                <a href="..\MntUsuario\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Mantenimiento Usuario</span>
                </a>
            </li>
            <li class="blue-dirty with-sub">
                <span>
                    <i class="glyphicon glyphicon-th"></i>
                    <span class="lbl">Consultar Ticket</span>
                </span>
                <ul>
                    <li>
                        <a href="..\ConsultarTicket\?tipo=1">
                            <span class="lbl">Tickets Abiertos</span>
                        </a>
                    </li>
                    <li>
                        <a href="..\ConsultarTicket\?tipo=2">
                            <span class="lbl">Tickets Cerrados</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="blue-dirty">
                <a href="..\Faltantes\">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Reportes BI</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
}
?>