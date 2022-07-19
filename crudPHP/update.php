<?php
include ("conexion.php");
$con = conexion();

$cod =$_POST['cod'];
$ci=$_POST['ci'];
$nombres =$_POST['nombres'];
$apellidos =$_POST['apellidos'];

$sql ="UPDATE usuario SET ci='$ci', nombres ='$nombres', apellidos='$apellidos' WHERE cod ='$cod' ";
$query =mysqli_query($con,$sql);
if($query){
    Header("Location: alumno.php");
} 
    ?>