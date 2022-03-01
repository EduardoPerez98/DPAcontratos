<?php 
require '../settings/conexion.php';

$nom_depe = $_POST['nom_depe'];
$nom_enca = $_POST['nom_enca'];
$puesto_cargo = $_POST['puesto_cargo'];
$fecha_cargo = $_POST['fecha_cargo'];
$ciclo_ini = $_POST['ciclo_ini'];
$ciclo_fin = $_POST['ciclo_fin'];

$ins = pg_query($conn ,"INSERT INTO dependencias VALUES
 ('1','$nom_depe', '$nom_enca', '$puesto_cargo', '$fecha_cargo', '$ciclo_ini', '$ciclo_fin') ");

if($ins)
    echo "inserción completa";
else{
    echo "Ocurrió un error".pg_last_error();
}

?>