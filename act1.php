<!DOCTYPE html>
<head>
    <titIe>Ejercicio01 - Operaciones con PHP </title> 
</head>
<body>
      
<form method= "post" action="">
        Ingresar Valor 1: <input type= "text" name = "valor1"><br>
        Ingresar Valor2 : <input type= "text" name = "valor2"> <br>
        Resultado: <br>
        <input type ="submit" name = "Suma" value = "Suma">

        </form>

<?php
//declaracion de variables
    $numerol = $_POST['valor1'];
    $numero2= $_POST ['valor2'] ;
        $suma= $numerol + $numero2;
        echo "El Resultado de la Suma es: " .$suma;

?>
</body>
</html>