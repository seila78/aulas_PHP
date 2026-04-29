<?php

require_once 'crud.php';

echo '<table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
        </tr>';

$livros = readAll($pdo, 'livros');

foreach ($livros as $livro) {
    echo "<tr>";
    echo "<td>" . $livro['id'] . "</td>";
    echo "<td>" . $livro['titulo'] . "</td>";
    echo "<td>" . $livro['autor'] . "</td>";
    echo "</tr>";
}

echo '</table>';

$livro = read($pdo, 'livros', 'id = 36');
if ($livro) {
    echo '<p>O livro em questão é: ' . $livro['titulo'] . ' por ' . $livro['autor'] . '</p>';
}