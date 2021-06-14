<?php
include_once ('../modelo/umodelo.php');
$co=new umodelo();
$xcod_u = $_REQUEST['clave'];
$xnom_u = $_REQUEST['usuario'];
$co->comparacion($xcod_u,$xnom_u);
?>