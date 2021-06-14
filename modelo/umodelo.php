<?php
class umodelo{
    public function umodelo(){}
    public function registrar($xcod_u,$xnom_u){
        include_once ('../modelo/uconexion.php');
        $co=new uconexion();
        $co->conectar();
        $co->consultar("insert into registro (cod_u,nom_u) values('".$xcod_u."','".$xnom_u."')",0);
        $co->desconectar();
    }
    public function comparacion($xcod_u,$xnom_u){
        include_once ('../modelo/uconexion.php');
        $co=new uconexion();
        $co->conectar();
        $co->comparar("select * from registro where nom_u='".$xcod_u."' and cod_u='".$xnom_u."' ",1);
        $co->desconectar();
    }
}
?>
