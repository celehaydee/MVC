<?php
class uconexion{
    public function uconexion(){}
        public function conectar(){
            $this->c=mysqli_connect("localhost","root","","ejercicio1");
        }
        public function consultar($sql,$sw){
            $reg=mysqli_query($this->c,$sql);
            require ('../vista/vexitoso.php');
        }     
        public function comparar($sql,$sw){
            $reg=mysqli_query($this->c,$sql);
            $reg1=mysqli_fetch_array($reg);
            if ($_REQUEST['usuario']=$reg1[0] and $_REQUEST['clave']=$reg1[1])
            {
                require ('../vista/vingresaste.php');
            }else{
                require ('../vista/vincorrecto.php');
            }
        }  
 
        public function desconectar(){
            mysqli_close($this->c);
        }
    }
?>
