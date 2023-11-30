<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>

<h2>Lista de Productos</h2>

<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "studenttics";
$password = "1234567890";
$dbname = "sales";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los productos
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

// Mostrar los productos en una tabla
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Marca</th>
            </tr>";

    // Mostrar datos de la base de datos
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["description"] . "</td>
                <td>" . $row["price"] . "</td>
                <td>" . $row["category"] . "</td>
                <td>" . $row["brand"] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron productos";
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>