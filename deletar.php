<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM produtos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Produto deletado com sucesso!";
    } else {
        echo "Erro ao deletar produto: " . $conn->error;
    }
}
?>

<form method="post">
    ID do Produto: <input type="number" name="id" required><br>
    <input type="submit" class="deletar" value="Deletar Produto">
</form>
