<?php 
include('conexion.php');
if(isset($_GET['RFC'])){
    $id=$_GET['RFC'];
    $query ="SELECT * from boletos where RFC=$id";
    $Result=mysqli_query($conex,$query);
    if(mysqli_num_rows($Result)>=1){
    $row=mysqli_fetch_array($Result);
    $RFC = $row['RFC'];
    $Nombre= $row['Nombre'];
    $email = $row['Email'];
    $tipo= $row['Tipo_Boleto'];
    $cantidad= $row['Cantidad'];
    $validacion= $row['Validar'];
    
    }
}

if(isset($_POST['validacion'])){
    $id=$_GET['RFC'];
    $valida= $_POST['Valida'];
  $query = "UPDATE boletos set Validar = '$valida' WHERE RFC='$id'";
  mysqli_query($conex, $query);

  $_SESSION['message'] = 'Registro validado';
  $_SESSION['message_type'] = 'warning';
header("Location: tabla.php");
  
}
?>

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

    <title>Document</title>
</head>

<body>
    <form action="verificacion.php?RFC=<?php echo $_GET['RFC']; ?>" method="POST">
        <div class="form-group f">
            <center>
                <select name="Valida" id="Valida" required>
                    <option>No quiero</option>
                    <option>Si quiero</option>

                </select>
            </center>
        </div>

        <center> <button class="btn btn-success" name="validacion">Deseas validar tu compra?</button></center>
    </form>
</body>

</html>