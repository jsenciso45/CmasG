<?php

function conectar(){
    $user='root';
    $contra='';
    $server='localhost';
    $bd='comercioReg';

    $cone=mysqly_connect($server,$user,$contra) or die ("Error al conectar la base de datos".mysql_error());

    mysql_select_db($bd,$cone);

    return $cone;
}

?>