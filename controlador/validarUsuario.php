<?php

include "Usuariocontrolador.php";

$resultado= array();

if (isset($_POST["usuario"])&& isset($_POST["contra"])) {

    $txtusuario= $_POST["usuario"];
    $txtcontra= $_POST["contra"];

    $resultado =array("estado"=>"true");

    if(Usuariocontrolador::login($txtusuario,$txtcontra)){
        return print(json_encode($resultado));
    }
}


$resultado =array("estado"=>"false");
return print(json_encode($resultado));