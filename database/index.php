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
        <li>INSERT INTO itens (nome, categoria, quantidade, valor, checkin)
            VALUES ("alface", "cozinha", 1, 9.97, 1),("tomate", "cozinha", 5, 15.97, 1), ("detergente", "cozinha", 2, 1.39, 1), ("desinfetante", "banheiro", 2, 3.95, 1), ("bucha", "lavanderia", 1, 7.99, 1), ("sabonete", "banheiro", 2, 23.97, 0), ("vassoura", "area externa", 1, 32.23, 1), ("creolina", "area externa", 1, 11.37, 1), ("shampoo", "banheiro", 1, 19.35, 1), ("condicionador", "banheiro", 1, 25.23, 1);</li>
        <li>SELECT * FROM itens</li>
        <li>DELETE FROM itens where id >=5</li>
        <li>UPDATE itens set checkin =1 where id =6</li>
    </ul>
</div>