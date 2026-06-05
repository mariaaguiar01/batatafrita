<?php
require_once '../database/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<pre>';
    var_dump($_POST);
    var_dump("INSERT INTO itens (nome, categoria, quantidade, valor, checkin) VALUES ('{$_POST['nome']}','{$_POST['categoria']}',{$_POST['quantidade']},{$_POST['valor']},{$_POST['checkin']})");
    exit;
    $_POST['valor'] = str_replace(',', '.', $_POST['valor']);
    $conexao->query("INSERT INTO itens (nome, categoria, quantidade, valor, checkin) VALUES ('{$_POST['nome']}','{$_POST['categoria']}',{$_POST['quantidade']},{$_POST['valor']},{$_POST['checkin']})");
}

$resultados = "";
foreach ($conexao->query("SELECT * FROM itens", \PDO::FETCH_ASSOC) as $resultado) {
    $linha = " <tr><td>{$resultado['id']}</td><td>{$resultado['nome']}</td><td>{$resultado['quantidade']}</td><td>{$resultado['categoria']}</td><td>{$resultado['valor']}</td><td>{$resultado['checkin']}</td></tr>";
    $resultados .= $linha;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batata frita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadastro">
            Botão
        </button>

        <!-- Modal -->
        <div class="modal fade" id="cadastro" tabindex="-1" aria-labelledby="cadastrotitle" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cadastrotitle">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/inicio">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade">
                            </div>
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor</label>
                                <input type="number" step="0.01" class="form-control" id="valor" name="valor">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="checkin" name="checkin">
                                <label for="checkin" class="form-check-label">Checkin</label>
                            </div>
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoria</label>
                                <select class="form-select" id="categoria" name="categoria">
                                    <option selected>Selecione a Categoria</option>
                                    <option value="banheiro">Banheiro</option>
                                    <option value="cozinha">Cozinha</option>
                                    <option value="lavanderia">Lavanderia</option>
                                    <option value="area externa">Area externa</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content here -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Checkin</th>
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>
        </table>
    </div>

</body>

</html>