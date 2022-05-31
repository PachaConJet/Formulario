<?php

    function AbrirBaseDatos()
    {
        $servidor = "localhost";
        $usuario = "root";
        $contrasenna = "";
        $nombreBD = "hotelbd";

        return new mysqli($servidor, $usuario, $contrasenna, $nombreBD);
    }

    function CerrarBaseDatos($instancia)
    {
        $instancia -> close();
    }

?>