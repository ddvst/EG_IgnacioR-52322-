<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $link = mysqli_connect("localhost", "root", "", "Capitales");

    $sql = "DELETE FROM Ciudades WHERE id = $id";

    if (mysqli_query($link, $sql)) {
        echo "Ciudad eliminada correctamente.<br><a href='index.html'>Volver al inicio</a>";
    } else {
        echo "Error al eliminar: " . mysqli_error($link);
    }

    mysqli_close($link);
}
?>

<h2>Eliminar Ciudad</h2>
<form method="post">
    ID de la Ciudad a eliminar: <input type="number" name="id" required><br><br>
    <input type="submit" value="Eliminar">
</form>
