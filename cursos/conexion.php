<?php
function conexion(){
    $server="localhost";
    $user="root";
    $pass="";
    $bd="talleres";
    $con= mysqli_conect($server,$user,$pass);
    mysqli_select_db($bd,$con);
    return $con;
    
}
?>
<?php
include ("conexion.php");
$con =conexion();
$sql="SELECT * FROM curso";
$query= mysqli_query($con,$sql);
?>