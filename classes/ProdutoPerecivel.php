<?php
declare(strict_types=1);

class ProdutoPerecivel extends Produto
{
    public function __construct(
        string $nome,
        float $preco,
        private string $validade
    ) {
        parent::__construct($nome, $preco);
    }

    public function exibir(): string
    {
        return parent::exibir() .
               " | Validade: {$this->validade}";
    }
}
