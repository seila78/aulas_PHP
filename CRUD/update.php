<?php
require_once 'crud.php';

$idlivro = 675;

$dadosAtualizados = [
    'titulo' => 'magia negra for dummies',
    'autor' => 'tux',
    'preco' => 299.99,
    'situacao' => 'disponível',
    'categoria' => 'outros'
];

$linhasAfetadas = update($pdo, 'livros', $dadosAtualizados, "id = $idlivro");

if ($linhasAfetadas > 0) {
    echo "Livro atualizado com sucesso!";
} else {
    echo "Nenhum livro encontrado com o ID especificado.";
}