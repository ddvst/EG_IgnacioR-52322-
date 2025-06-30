<?php
$link = mysqli_connect("localhost", "root", "", "Capitales");

$result = mysqli_query($link, "SELECT * FROM Ciudades");

echo "<table border='1'>
<tr><th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th></tr>";

while ($fila = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>{$fila['id']}</td>";
    echo "<td>{$fila['ciudad']}</td>";
    echo "<td>{$fila['pais']}</td>";
    echo "<td>{$fila['habitantes']}</td>";
    echo "<td>{$fila['superficie']}</td>";
    echo "<td>" . ($fila['tieneMetro'] ? "si" : "no") . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_free_result($result);
mysqli_close($link);
?>
