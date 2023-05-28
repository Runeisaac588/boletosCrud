<?php 
include('conexion.php');

if(isset($_GET['id'])){
 $id=$_GET['id'];
 $query = "DELETE FROM boletos where id=$id "; 
 $Result =mysqli_query($conex,$query);
 if(!$Result){
    die("Query failed");
 }else{
    $_SESSION['message'] = "Registro eliminado";
    $_SESSION['message_type'] ='danger';
    header("Location: tabla.php");
 }
}
?>