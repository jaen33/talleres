<?php
include("conexion.php");
$cod=$_GET['id'];
$con =conexion();

$sql="DELETE FROM usuario WHERE cod='$cod'";
$query= mysqli_query($con,$sql);
if($query){
    Header("Location: alumno.php");

}