<?php

include "conexao.php";
$sql = "SELECT * FROM estoque";
$result = $conn->query($sql);

while ($user_data = mysqli_fetch_assoc($result)) 
    {
    echo "<tr>";
    echo "<td>" . $user_data['item'] . "</td>";
    echo "<td>" . $user_data['quantidade'] . "</td>";
    echo "<tr>";
    }
