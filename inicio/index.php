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
        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome">

            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade">
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="number" class="form-control" id="valor">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="checkin">
                <label for="checkin" class="form-check-label">Checkin</label>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-select" id="categoria">
                    <option selected>Selecione a Categoria</option>
                    <option value="banheiro">Banheiro</option>
                    <option value="cozinha">Cozinha</option>
                    <option value="lavanderia">Lavanderia</option>
                    <option value="area externa">Area externa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        <!-- Content here -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Banheiro</th>
                    <th scope="col">Cozinha</th>
                    <th scope="col">Lavanderia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Desinfetante</td>
                    <td>Detergente</td>
                    <td>Sabonete</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Alvejante</td>
                    <td>Alface</td>
                    <td>Sabão líquido</td>
                </tr>

            </tbody>
        </table>
    </div>

</body>

</html>