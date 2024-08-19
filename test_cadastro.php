<?php
// Teste com caminho absoluto
require_once '../db/Conexao.php';
require_once '../projetopweb/Model/Autor.php';
require_once '../Repository/AutorRepository.php';

use Model\Autor;
use Repository\AutorRepository;

// Crie uma nova instância do repositório
$repository = new AutorRepository();

// Dados do autor para cadastro
$nome = "J.K. Rowling";
$nacionalidade = "Britânica";

// Crie uma nova instância do autor com os dados fornecidos
$autor = new Autor(null, $nome, $nacionalidade);

// Salve o autor no banco de dados
$repository->save($autor);

// Verifique se o autor foi cadastrado com sucesso
$autores = $repository->findAll();

echo "<h1>Autores Cadastrados</h1>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
        </tr>";

foreach ($autores as $autor) {
    echo "<tr>
            <td>{$autor->getId()}</td>
            <td>{$autor->getNome()}</td>
            <td>{$autor->getNacionalidade()}</td>
          </tr>";
}

echo "</table>";
?>
