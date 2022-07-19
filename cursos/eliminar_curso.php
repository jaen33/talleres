<?php
include("conexion.php");
$cod=$_GET['id_curso'];
$con =conexion();

$sql="DELETE FROM usuario WHERE cod='$id_curso'";
$query= mysqli_query($con,$sql);
if($query){
    Header("Location: curso.php");

}