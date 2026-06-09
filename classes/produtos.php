<?php
declare(strict_types=1);

class Produto implements ProdutoInterface
{
    public function __construct(
        private string $nome,
        private float $preco
    ) {}

    public function exibir(): string
    {
        return "{$this->nome} - R$ {$this->preco}";
    }
}
