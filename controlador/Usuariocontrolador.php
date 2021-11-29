<?php
include "UsuarioDao.php";

class Usuariocontrolador{
    
    public static function login($usuario,$contra){

        $obj_usuario=new usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setContra($contra);

        return usuarioDao::login($obj_usuario);
    }
}