<?php

include '../conexion/conex.php';

$sentencia = $conn->query("SELECT * FROM usuarios;");
$users=$sentencia->fetchAll(PDO::FETCH_OBJ);
print_r($users);

?>