<?php
include ("conexion.php");
$con =conexion();

$cod=$_POST['cod'];
$ci=$_POST['ci'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="INSERT INTO usuario VALUES('$cod','$ci','$nombres','$apellidos')";
$query=mysqli_query($con,$sql);
if ($query) {
    header("Location: alumno.php");
}else{

}
?>