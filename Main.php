
<?php

require_once "Produto.php";
require_once "Estoque.php";
require_once "Caixa.php";


$produto1 = new Produto("Arroz 5kg", 29.90, 20);
$produto2 = new Produto("Feijão 1kg", 8.50, 35);
$produto3 = new Produto("Macarrão", 4.99, 50);


$estoque = new Estoque();

$estoque->adicionarProduto($produto1);
$estoque->adicionarProduto($produto2);
$estoque->adicionarProduto($produto3);

echo "<h2>Estoque do Mercadinho</h2>";
$estoque->listarProdutos();

echo "<hr>";


$caixa = new Caixa();

echo "<h2>Venda Realizada</h2>";

$caixa->registrarVenda($produto1);
$caixa->registrarVenda($produto3);

echo "<hr>";

$caixa->mostrarTotal();

?>
