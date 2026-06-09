<?php
declare(strict_types=1);

require_once 'ProdutoInterface.php';
require_once 'Produto.php';
require_once 'ProdutoPerecivel.php';
require_once 'Fornecedor.php';
require_once 'Estoque.php';

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
