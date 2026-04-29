<?php
require_once 'crud.php';

$idlivro = 674;

$deleted = delete($pdo, 'livros', "id = $idlivro");

if ($deleted) {
    echo "Livro excluído com sucesso!";
} else {
    echo "Nenhum livro encontrado com o ID especificado.";
}