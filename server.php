<?php
    require_once "lib/nusoap.php";
    function getNombres($datos){
        if ($datos == "Nombres"){
            return join(",", array(
                "Pedro",
                "Gabriel",
                "Jose",
                "Luis",
                "Marco",
                "Antonio"));
        }
        else{
            return "No hay nombres";
        }
    }
    $server = new soap_server();
    $server->register("getNombres");
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>