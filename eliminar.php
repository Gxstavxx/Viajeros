<?php
include "conexion.php";

$id = $_GET['id'];

$conn -> query("DELETE FROM ur WHERE id ='". $id."'");
header('Location:Listar.php');
?>

