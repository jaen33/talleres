<?php
    include("conexion.php");
    $con = conexion();

    $id=$_GET['id'];
    $sql ="SELECT *FROM curso WHERE  cod='$id_curso'";
    $query=mysqli_query($con,$sql);
    
    $row =mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <form action="update.php" method ="POST">
            <input type="hidden" name ="cod" value="<?php echo $row['id_curso']?>">
            <input type="text" class ="form-control mb-3" name ="tipo_curos" placeholder ="tipo_curso" value ="<?php echo $row['tipo_curso']?>">
            <input type="text" class ="form-control mb-3" name ="turno" placeholder ="turno" value ="<?php echo $row['turno']?>">
            <input type="text" class ="form-control mb-3" name ="fecha_inicio" placeholder ="fecha_inicio" value="<?php echo $row['fecha_inicio']?>">
            <input type="text" class ="form-control mb-3" name ="fecha_inicio" placeholder ="fecha_fin" value="<?php echo $row['fecha_fin']?>">
            <input type="submit" class="btn-primary btn-block" value ="Actualizar">
        </form>

    </div>
    
</body>
</html>