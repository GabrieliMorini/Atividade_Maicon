<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $data_validade = $_POST['data_validade'];
    $preco = $_POST['preco'];
    $unidade_medida = $_POST['unidade_medida'];

    $sql = "INSERT INTO produtos (codigo, descricao, quantidade, data_validade, preco, unidade_medida)
            VALUES ('$codigo', '$descricao', '$quantidade', '$data_validade', '$preco', '$unidade_medida')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir produto: " . $conn->error;
    }
}
?>

<form method="post">
    Código: <input type="text" name="codigo" required><br>
    Descrição: <input type="text" name="descricao" required><br>
    Quantidade: <input type="number" name="quantidade" required><br>
    Data de Validade: <input type="date" name="data_validade" required><br>
    Preço: <input type="text" name="preco" required><br>
    Unidade de Medida: <input type="text" name="unidade_medida" required><br>
    <input type="submit" class="inserir" value="Inserir Produto">
</form>



