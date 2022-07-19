<?php
function conexion(){
    $server="localhost";
    $user="root";
    $pass="";
    $bd="registros";
    $con= mysqli_conect($server,$user,$pass);
    mysqli_select_db($bd,$con);
    return $con;
    
}
?>
<?php
include ("conexion.php");
$con =conexion();
$sql="SELECT * FROM usuario";
$query= mysqli_query($con,$sql);
?>
