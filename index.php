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

        <div class="cont">



            <form method="post" class="formulario">
                <h2 class="titulo">Venta de boletos</h2>
                <h2 class="titulo3">Adán Isaac Arrieta Chona 19320886 </h2>

                <div class="form-group f">
                    <input name="RFC" type="text" class="in" placeholder="RFC" requeried>
                </div>
                <div class="form-group f">
                    <input name="Nombre" type="text" class="in" placeholder="Nombre" required>
                </div>

                <div class="form-group f">
                    <input name="Email" type="email" class="in" placeholder="Correo electronico" required>
                </div>
                <div class="form-group f">

                    <label class="fo1">Elige El tipo de boleto</label>
                    <select name="tipo_boleto" id="tipo_boleto" required>
                        <option value=100>Boleto A : 100$</option>
                        <option value=200>Boleto B : 200$</option>
                        <option value=300>Boleto C : 300$</option>
                        <option value=400>Boleto D : 400$</option>
                        <option value=500>Boleto E: 500$</option>
                    </select>
                </div>
                <div class="f">
                    <label class="fo1">Elige la cantidad de boletos</label>
                    <select name="cantB" id="cantB">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <label class="" for="enviar">Mandar confirmacion</label>
                <input type="checkbox" name="enviar" id="enviar" placeholder=" Correo Electronico" class=" email"
                    value=1>

                <div class="env">
                    <input type="submit" name="register" class="botonsito">
                </div>
               
            </form>
          

        </div>


    </div>
       <center>
                <div class="env">
                    <button><a href="tabla.php">Ver Registros</a></button>
                </div>
            </center>







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