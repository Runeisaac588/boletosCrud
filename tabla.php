<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="estilo.css">


    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Tiro+Devanagari+Hindi&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <title>Venta vip</title>
</head>

<body>

    <?php
        include('correo.php');
    include('registro.php');

    ?>


    <div class="col-md-4 ">

        <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php session_unset(); } ?>
        <?php
     
      
        ?>

    </div>

    <div class="gri">


        <div class="cont2">

            <h2 class="titulo">Registros</h2>
            <h2 class="titulo3">Inserta y elimina con los botones de la ultima columna</h2>
            <div class="g">
                <h4 class="l">Ingresa la RFC, Nombre o Correo</h4>
                <div class="container-fluid">

                    <form class="d-flex">

                        <form action="" method="GET">

                            <input class="form-control me-2" type="search" placeholder="Buscar con PHP" name="busqueda">
                            <br>
                            <button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar </b> </button>
                        </form>
                </div>
            </div>
            <?php

$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE RFC LIKE'%".$busqueda."%' OR Nombre  LIKE'%".$busqueda."%'
    OR Email  LIKE'%".$busqueda."%'";
	}
  
}


?>
            <div class="element">

                <table class="tablita">


                    <thead>
                        <tr>
                            <th>RFC</th>
                            <th>Nombre</th>
                            <th>Correo electronico</th>
                            <th>Tipo de boleto</th>
                            <th>Cantidad</th>
                            <th>Validar</th>
                            <th>acciones</th>

                        </tr>
                    <tbody>
                        <?php 
                            $query ="SELECT * from boletos $where";
                            $result=mysqli_query($conex,$query);
        
                           if($result -> num_rows >0){
    while($row=mysqli_fetch_array($result)){?>

                        <tr>
                            <td>
                                <?php echo $row['RFC']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Tipo_Boleto']; ?></td>
                            <td><?php echo $row['Cantidad']; ?></td>
                            <td><?php echo $row['Validar']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['Id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker "></i>
                                </a>
                                <a href="eliminar.php?id=<?php echo $row['Id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt "></i>
                                </a>
                            
                            </td>
                            <?php 
                        
                        }} 
                        else{

    ?>
                        <tr class="text-center">
                            <td colspan="16">No existen registros</td>
                        </tr>


                        <?php
    
                        }?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>




    </div>
    </div>


    </div>

    <script>
    // EVITAR REENVIO DE DATOS.
    if (window.history.replaceState) { // verificamos disponibilidad
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>

</body>

</html>