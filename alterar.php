<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $data_validade = $_POST['data_validade'];
    $preco = $_POST['preco'];
    $unidade_medida = $_POST['unidade_medida'];

    $sql = "UPDATE produtos SET codigo='$codigo', descricao='$descricao', quantidade='$quantidade', data_validade='$data_validade', preco='$preco', unidade_medida='$unidade_medida' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Produto alterado com sucesso!";
    } else {
        echo "Erro ao alterar produto: " . $conn->error;
    }
}

?>

<form method="post">
    ID: <input type="number" name="id" required><br>
    Código: <input type="text" name="codigo" required><br>
    Descrição: <input type="text" name="descricao" required><br>
    Quantidade: <input type="number" name="quantidade" required><br>
    Data de Validade: <input type="date" name="data_validade" required><br>
    Preço: <input type="text" name="preco" required><br>
    Unidade de Medida: <input type="text" name="unidade_medida" required><br>
    <input type="submit" class="alterar" value="Alterar Produto">
</form>
