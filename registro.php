<?php
include('conexion.php');


if(isset($_POST['register'])){ 

     if(strlen($_POST['Nombre'])>=1 &&
    strlen($_POST['Email'])>=1 &&
      strlen($_POST['cantB'])>=1 &&
       strlen($_POST['tipo_boleto'])>=1 &&
        strlen($_POST['RFC'])>=1){
$correo=$_POST['Email'];
$RFC=$_POST['RFC']; 
$Nombre=$_POST['Nombre']; 
$CantB=$_POST['cantB']; 
$Boletos=$_POST['tipo_boleto']; 


   $consulta="INSERT INTO boletos(RFC, Nombre, Email, Tipo_Boleto, Cantidad) VALUES ('$RFC','$Nombre','$correo','$Boletos','$CantB');";
   $resultado=mysqli_query($conex,$consulta);
   
   if($resultado){
  
        
$_SESSION['message']='Compra registrada';
$_SESSION['message_type']='success';
   }else{
    ?>
<script>
'strict'
alert("algo salio mal")
</script>
<?php
   }
 
 }


} else{ }