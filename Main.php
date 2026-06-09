<?php
declare(strict_types=1);

require_once 'interfaces/ProdutoInterface.php';
require_once 'classes/Produto.php';
require_once 'classes/ProdutoPerecivel.php';
require_once 'classes/Fornecedor.php';
require_once 'classes/Estoque.php';

$fornecedor = new Fornecedor("Mercado Central");

$estoque = new Estoque($fornecedor);

$estoque->adicionarProduto(
    new Produto("Mouse", 50.00)
);

$estoque->adicionarProduto(
    new ProdutoPerecivel(
        "Leite",
        6.50,
        "15/06/2026"
    )
);

$estoque->listarProdutos();
