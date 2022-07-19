<?php
include("conexion.php");
$con=conexion();
$sql="SELECT *FROM usuario";
$query=mysqli_query($con,$sql);

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Pagina Alumno</title>
    
</head> 
<body>
      <div class="container mt-5">
          <div class="row">
              <div class="container col-md-3">
                  <h2>Ingrese Sus Datos</h2>
                  <form action="insertar.php" method ="POST">
                      <input type="text" class="form control mb-3" name="cod" placeholder="ingrese su codigo">
                      <input type="text" class="form control mb-3" name="ci" placeholder="ingrese su CI">
                      <input type="text" class="form control mb-3" name="nombres" placeholder="ingrese sus nombres">
                      <input type="text" class="form control mb-3" name="apellidos" placeholder="ingrese sus apellidos">
                      <input type="submit" class="btn btn-primary">
                  </form>  

              </div>
              <div class="col-md-8">
                  <h2>Mostrar Datos</h2>
                  <table class="table">
                      <thead class="table-success table-stiped">
                          <tr>
                              <th>COdigo</th>
                              <th>CI</th>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th></th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          while($row=mysqli_fetch_array($query)){

                        
                          ?>
                          <tr>
                                    <th><?php echo $row['cod']?></th>
                                    <th><?php echo $row['ci']?></th>
                                    <th><?php echo $row['nombres']?></th>
                                    <th><?php echo $row['apellidos']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['cod']?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['cod']?>" class="btn btn-info">Eliminar</a></th>
                            </tr>
                            
                          <?php
                          
                              }
                          ?>
                            
                      </tbody>
                      
                  </table>

              </div>
 
          </div>
                              
      </div>
            
    
</body>
</html>
