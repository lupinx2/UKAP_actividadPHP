<!DOCTYPE html>
<html>
<head>
    <title>UKPA Actividad 6.5</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Actividad 6.5</h1>
    <form action="index.php" method="GET">
        <label for="num1">Primer Numero:</label>
        <input type="text" id="num1" name="num1" pattern="-?[0-9]+(\.[0-9]+)?" required><br><br>
        <label for="num2">Segundo Numero:</label>
        <input type="text" id="num2" name="num2" pattern="-?[0-9]+(\.[0-9]+)?" required><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $sum = $num1 + $num2;
            echo "<p>El resultado es: $sum</p>";
        }
    ?>
</body>
</html>
