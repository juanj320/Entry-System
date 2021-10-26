<?php

$mensaje = "";

if(isset($_POST['button'])) {

    $code = $_POST['codigo'];

    switch($_POST['button']){       
        case 'ingress':
        
            $con = new metods;
            $prueba = $con->ingress($code);
            
            if($prueba){
                $mensaje = "Ingreso autorizado";
                return $mensaje;
            }else{
                $mensaje = "Ingreso denegado";
                return $mensaje;
            }
            

        case 'egress':
           
            $con = new metods;
            $prueba = $con->egress($code);

            if($prueba){
                $mensaje = "Empleado Salio";
                return $mensaje;
            }else{
                $mensaje = "No se encontro al Empleado";
                return $mensaje;
            }


        break;
        case 'delete':
            $id = $_POST['id'];

            $con = new metods;
            $prueba = $con->delete($id);
        break;
            
    }

}

?>