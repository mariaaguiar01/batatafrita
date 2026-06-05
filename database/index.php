<?php

$conexao = new \PDO('sqlite:database.db');
$query = $_GET['query'] ?? '';
$result = $conexao->query($query);
$resultado = $result->fetchAll(\PDO::FETCH_ASSOC) ?? '';
?>

<form method="get" action="/">
    <textarea name="query" id="query"></textarea>
    <button type="submit">Executar</button>
</form>
<p id="resultado"><?= print_r($resultado) ?></p>