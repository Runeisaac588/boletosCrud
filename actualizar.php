<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php 
    include("conexion.php");

$RFC=$_POST['RFC'];

$sql="SELECT * FROM boletos WHERE RFC='$RFC'";
$query=mysqli_query($conex,$sql);

$row=mysqli_fetch_array($query);
  /*include('update.php');*/
?> < <div class="container mt-5">
        <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">

            <input type="text" class="form-control mb-3" name="RFC" placeholder="RFC"
                value="<?php echo $row['RFC']  ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres"
                value="<?php echo $row['Nombre']  ?>">
            <input type="text" class="form-control mb-3" name="email" placeholder="Correo electronico"
                value="<?php echo $row['Email']  ?>">
            <input type="text" class="form-control mb-3" name="boleto" placeholder="Tipo boleto"
                value="<?php echo $row['Tipo_Boleto']  ?>">
            <input type="text" class="form-control mb-3" name="cantB" placeholder="Cantidad"
                value="<?php echo $row['Cantidad']  ?>">


            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

        </div>
</body>

</html>