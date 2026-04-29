<?php
require_once 'crud.php';

$novoLivro = [
    'titulo' => 'php for dummies',
    'preco' => 299.99,
    'situacao' => 'disponível',
    'categoria' => 'informática',
];

$idLivroNovo = create($pdo, 'livros', $novoLivro);
echo 'Novo livro inserido com ID: ' . $idLivroNovo;