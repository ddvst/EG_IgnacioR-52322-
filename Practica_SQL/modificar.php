<?php
$link = mysqli_connect("localhost", "root", "", "Capitales");

// Si se envió el formulario de modificación
if (isset($_POST['modificar'])) {
    $id = $_POST['id'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    $sql = "UPDATE Ciudades SET 
            ciudad = '$ciudad', 
            pais = '$pais', 
            habitantes = $habitantes, 
            superficie = $superficie, 
            tieneMetro = $tieneMetro 
            WHERE id = $id";

    if (mysqli_query($link, $sql)) {
        echo "Ciudad modificada correctamente.<br><a href='index.html'>Volver al inicio</a>";
    } else {
        echo "Error al modificar: " . mysqli_error($link);
    }
}

// Si se quiere buscar una ciudad por su ID
if (isset($_POST['buscar'])) {
    $id = $_POST['id'];

    $result = mysqli_query($link, "SELECT * FROM Ciudades WHERE id = $id");

    if ($fila = mysqli_fetch_array($result)) {
?>
<h2>Modificar Ciudad</h2>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
    Ciudad: <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>" required><br>
    Pais: <input type="text" name="pais" value="<?php echo $fila['pais']; ?>" required><br>
    Habitantes: <input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>" required><br>
    Superficie: <input type="number" step="0.01" name="superficie" value="<?php echo $fila['superficie']; ?>" required><br>
    Tiene Metro: <input type="checkbox" name="tieneMetro" <?php if ($fila['tieneMetro']) echo "checked"; ?>><br>
    <input type="submit" name="modificar" value="Modificar Ciudad">
</form>
<?php
    } else {
        echo "Ciudad no encontrada.";
    }
}
mysqli_close($link);
?>

<h2>Buscar Ciudad para Modificar</h2>
<form method="post">
    ID de la Ciudad: <input type="number" name="id" required>
    <input type="submit" name="buscar" value="Buscar">
</form>
