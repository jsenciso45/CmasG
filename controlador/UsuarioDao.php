<?php
include "../conexion/conexion.php";
include "../tablas/usuarios.php";


class usuarioDao extends conexion
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Metodo que sirve para validar el login
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function login($usuario)
    {
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND contra = :contra";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":contra", $usuario->getContra());

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas =$resultado->fetch();
            if($filas["usuario"]==$usuario->getUsuario() && $filas["contra"] == $usuario->getContra()){
                return true;
            }

        }

        return false;
    }
}