<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css"> 
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Georgia', serif; 
        }

        /* Variáveis de design */
        :root {
            --primary-color: #003366; 
            --secondary-color: #1a1a1a; 
            --accent-color: #f0f0f0;
            --hover-color: #002244; 
            --background-color: #e6e6e6; 
            --card-shadow: rgba(0, 0, 0, 0.2); 
            --container-max-width: 1200px;
        }

        /* Estilos básicos para o corpo */
        body {
            font-family: 'Georgia', serif; 
            line-height: 1.6;
            color: var(--secondary-color);
            background-color: var(--background-color);
            margin: 0;
            padding: 0;
            padding-bottom: 60px; 
        }

        /* Cabeçalho */
        header {
            background: var(--secondary-color);
            color: var(--accent-color);
            padding: 20px 0;
            text-align: center;
            border-bottom: 3px solid var(--primary-color);
        }

        header h1 {
            margin-bottom: 15px;
            font-size: 2rem;
            letter-spacing: 2px;
        }

        /* Estilos para a tabela */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: var(--accent-color);
            box-shadow: 0 0 10px var(--card-shadow);
            border-radius: 8px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 1rem;
            color: var(--secondary-color);
        }

        th {
            background-color: var(--primary-color);
            color: var(--accent-color);
        }

 

        /* Estilo para o rodapé */
        footer {
            background: var(--secondary-color);
            color: var(--accent-color);
            text-align: center;
            padding: 15px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista de Produtos</h1>
    </header>

    <div class="container">
        <?php
        $sql = "SELECT * FROM produtos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Data de Validade</th>
                        <th>Preço</th>
                        <th>Unidade de Medida</th>
                    </tr>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['codigo'] . "</td>
                        <td>" . $row['descricao'] . "</td>
                        <td>" . $row['quantidade'] . "</td>
                        <td>" . $row['data_validade'] . "</td>
                        <td>" . $row['preco'] . "</td>
                        <td>" . $row['unidade_medida'] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum produto encontrado.</p>";
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
