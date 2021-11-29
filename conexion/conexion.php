<?php

class conexion{
//    Conexion a la base de datos
    public static function conectar(){
        try {

            $cn =new PDO("mysql:host=localhost;dbname=comerciomas","root","");

            return $cn;

        } catch (PDOException $ex) {

            die("error en la conexion ".$ex->getMessage());

        }
    }
}
