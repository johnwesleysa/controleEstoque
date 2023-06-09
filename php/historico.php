<?php
include "conexao.php";

$sql = "SELECT * FROM historico";
$result = $conn->query($sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    if ($row['acao'] == "adicionado") {
        echo "<td>Adicionado " . $row['quantidade'] . " " . $row['item'] . "</td>";
    } elseif ($row['acao'] == "removido") {
        echo "<td>Removido " . $row['quantidade'] . " " . $row['item'] . "</td>";
    } else {
        echo "<td>" . $row['acao'] . "</td>";
    }
    echo "<td>" . $row['data'] . "</td>";
    echo "</tr>";
}
?>

