<?php
function conexion(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="talleres";
    $con = mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;
}
?>

