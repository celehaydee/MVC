<?php
include_once ('../modelo/umodelo.php');
$co=new umodelo();
$xcod_u = $_REQUEST['claven'];
$xnom_u = $_REQUEST['usuarion'];
$co->registrar($xcod_u,$xnom_u);
?>
