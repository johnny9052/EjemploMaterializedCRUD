<?php

include '../Modelo/clsLoguin.php';
include '../DAO/loguinDAO.php';

isset($_POST['type']) ? $accion = $_POST['type'] : $accion = "";
isset($_POST['usuario']) ? $usuario = $_POST['usuario'] : $usuario = "";
isset($_POST['password']) ? $password = $_POST['password'] : $password = "";

session_start();

$loguin = new clsLoguin($usuario, $password);
$conex = new loguinDAO();

$mensaje = "";

switch ($accion) {
    case "con":
        if ($conex->loguear($loguin)) {
            $_SESSION["user"] = $conex->loguear($loguin); //Datos que permaneceran durante la sesion del usuario              
            $mensaje = "user=" . $_SESSION["user"];
        } else {
            $mensaje = "msjloguin=El usuario no existe";
        }
        break;

    case "desc":
        session_destroy();
        $mensaje = "msjloguin=Sesion cerrada correctamente";
        break;
}

header('location:../index.php?' . $mensaje);






