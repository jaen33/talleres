<?php
include ("conexion.php");
$con =conexion();

$id_curso=$_POST['id_curso'];
$tipo_curso=$_POST['tipo_curso'];
$turno=$_POST['turno'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];

$sql="INSERT INTO usuario VALUES('$id_curso','$tipo_curso','$turno','$fecha_inicio','$fecha_fin')";
$query=mysqli_query($con,$sql);
if ($query) {
    header("Location:curso.php");
}else{

}
?>