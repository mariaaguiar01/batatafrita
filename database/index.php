<?php
$conexao = new \PDO('sqlite:database.db');
$query = $_GET['query'] ?? '';
$resultado = '';
try {
    if (!empty($query)) {
        $resultados = [];
        foreach ($conexao->query($query, \PDO::FETCH_ASSOC) as $resultado) {
            $resultados[] = $resultado;
        }
        $resultado = $resultados;
    }
} catch (\Throwable $e) {
    var_dump('erro', $e);
}
?>

<form method="get" action="/database">
    <textarea name="query" id="query" style="width:100%;" rows="10"><?= $query ?></textarea>
    <button type="submit">Executar</button>
</form>

<?php
echo '<pre>';
var_dump($resultado);
?>

<div class="container">
    <ul>
        <li>CREATE TABLE itens (id INTEGER PRIMARY KEY, nome VARCHAR(50) NOT NULL, categoria TEXT CHECK (categoria IN ("cozinha","banheiro","lavanderia","area externa")) NOT NULL, quantidade INTEGER NOT NULL, valor DECIMAL(3,2) NOT NULL, checkin BOOLEAN NOT NULL);</li>
    </ul>
</div>