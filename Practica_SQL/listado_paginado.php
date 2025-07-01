<?php
$link = mysqli_connect("localhost", "root", "", "Capitales");
$registros_por_pagina = 5;

if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 1;
}

$inicio = ($pagina - 1) * $registros_por_pagina;
$total_resultado = mysqli_query($link, "SELECT COUNT(*) as total FROM Ciudades");
$fila_total = mysqli_fetch_array($total_resultado);
$total_registros = $fila_total['total'];
$total_paginas = ceil($total_registros / $registros_por_pagina);
$result = mysqli_query($link, "SELECT * FROM Ciudades LIMIT $inicio, $registros_por_pagina");

echo "<h2>Listado de Ciudades (Paginado)</h2>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Ciudad</th>
    <th>Pais</th>
    <th>Habitantes</th>
    <th>Superficie</th>
    <th>Tiene Metro</th>
</tr>";

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

echo "<div style='margin-top:20px;'>Paginas: ";
for ($i = 1; $i <= $total_paginas; $i++) {
    if ($i == $pagina) {
        echo " <strong>$i</strong> ";
    } else {
        echo " <a href='listado_paginado.php?pagina=$i'>$i</a> ";
    }
}
echo "</div>";

mysqli_free_result($result);
mysqli_close($link);
?>
