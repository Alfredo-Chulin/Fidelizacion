<?php


$telefono=$_POST['telefono'];
$password=$_POST['password'];



$conexion=mysqli_connect("localhost","chulin","chulin123","fidelizacion");

$consulta="SELECT*FROM usuarios where telefono='$telefono' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio.php");

}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <br>
    <div class="error">
    <h2 >ERROR EL USUARIO NO EXISTE O LA CONTRASEÑA  ES INCORRECTA</h2>
    </div>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

