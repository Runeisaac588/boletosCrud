<?php
include('conexion.php');
if(isset($_POST['register'])){ 
$correo=$_POST['Email'];
$RFC=$_POST['RFC']; 
$Nombre=$_POST['Nombre']; 
$CantB=$_POST['cantB']; 
$Boletos=$_POST['tipo_boleto']; 



    If(isset($_POST['register']) && $_POST['enviar'] == '1'){
        $RFC=$_POST['RFC']; 
        $correo=$_POST['Email'];
$asunto ="prueba correo";
$cuerpo = "RFC: ".$RFC."\n Correo: ".$correo
."\n costo del boleto: ".$Boletos."\n Cantidad: ".$CantB
." \n Costo total: ".$CantB*$Boletos."\n para verificar tu compra entra al siguiente link: \n http://crudarrieta.runeisaac.xyz/verificacion.php?RFC=$RFC";
$emisor ="Adan Isaac <adanisakito@gmail.com>";
       

       

      mail($correo,$asunto,$cuerpo,$emisor);

      ?>
<script>
alert("mandaste un correo pd: lavate las manos c:");
</script>
<?php 
} else{ 
    
 ?>
<script>
alert(" no mandaste un correo pd: lavate las manos c:");
</script>
<?php 

    
} 

   ?>

<?php

} else{ }?>