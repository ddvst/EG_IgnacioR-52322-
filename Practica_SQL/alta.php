<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect("localhost", "root", "", "Capitales");

    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)";
    
    if (mysqli_query($link, $sql)) {
        echo "Ciudad agregada correctamente.<br><a href='index.html'>Volver al inicio</a>";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>

<form method="post">
    Ciudad: <input type="text" name="ciudad" required><br>
    Pais: <input type="text" name="pais" required><br>
    Habitantes: <input type="number" name="habitantes" required><br>
    Superficie: <input type="number" step="0.01" name="superficie" required><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro"><br>
    <input type="submit" value="Agregar Ciudad">
</form>
