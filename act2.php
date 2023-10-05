<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <form method="POST" action="">
        <label for="valor1">Número 1:</label>
        <input type="number" name="valor1" id="valor1" required>
        <br>
        <label for="valor2">Número 2:</label>
        <input type="number" name="valor2" id="valor2" required>
        <br>
        <input type="submit" value="Calcular Producto">
    </form>

    <?php
    // Verificar si se enviaron datos por POST
    if (isset($_POST['valor1']) && isset($_POST['valor2'])) {
        // Declaración de variables
        $numero1 = $_POST['valor1'];
        $numero2 = $_POST['valor2'];
        $producto = $numero1 * $numero2;
        echo "El Producto de la operación es: " . $producto;
    }
    ?>

</body>
</html>
