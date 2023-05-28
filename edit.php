<?php 
include('conexion.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query ="SELECT * from boletos where id=$id";
    $Result=mysqli_query($conex,$query);
    if(mysqli_num_rows($Result)>=1){
    $row=mysqli_fetch_array($Result);
    $RFC = $row['RFC'];
    $Nombre= $row['Nombre'];
    $email = $row['Email'];
    $tipo= $row['Tipo_Boleto'];
    $cantidad= $row['Cantidad'];
    
    }
}

if(isset($_POST['update'])){
      $id = $_GET['id'];
    $RFC1 = $_POST['RFC'];
   $Nombre1= $_POST['Nombre'];
    $email1 = $_POST['Email'];
    $tipo1= $_POST['tipo_boleto'];
    $cantidad1= $_POST['cantB'];
  $query = "UPDATE boletos set RFC = '$RFC1', Nombre = '$Nombre1',Email ='$email1', Tipo_Boleto='$tipo1',Cantidad='$cantidad1' WHERE id=$id";
  mysqli_query($conex, $query);

  $_SESSION['message'] = 'Registro actualizado';
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


    <title>Document</title>
</head>

<body>
    <nav class=" navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">VENTA DE BOLETOS</a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group f">
                            <input name="RFC" type="text" class="form-control" value="<?php echo $RFC ?>"
                                placeholder="Update RFC">
                        </div>
                        <div class="form-group f">
                            <input name="Nombre" type="text" class="form-control" value="<?php echo $Nombre ?>"
                                placeholder="Update Nombre">
                        </div>

                        <div class="form-group f">
                            <input name="Email" type="email" class="form-control" value="<?php echo $email ?>"
                                placeholder="Update Email">
                        </div>
                        <div class="form-group f">

                            <label class="fo1">Elige El tipo de boleto</label>
                            <select name="tipo_boleto" id="tipo_boleto" class="in in2" required>
                                <option value=100>Boleto A : 100$</option>
                                <option value=200>Boleto B : 200$</option>
                                <option value=300>Boleto C : 300$</option>
                                <option value=400>Boleto D : 400$</option>
                                <option value=500>Boleto E: 500$</option>
                            </select>
                        </div>
                        <div class="form-group f">
                            <label class="fo1">Elige la cantidad de boletos</label>
                            <select name="cantB" id="cantB" class="in">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <button class="btn btn-success" name="update">Actualiza</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>

</html>