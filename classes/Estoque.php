<?php
declare(strict_types=1);

class Estoque
{
    private array $produtos = [];

    public function __construct(
        private Fornecedor $fornecedor
    ) {}

    public function adicionarProduto(
        ProdutoInterface $produto
    ): void {
        $this->produtos[] = $produto;
    }

    public function listarProdutos(): void
    {
        echo "Fornecedor: "
            . $this->fornecedor->getNome()
            . PHP_EOL;

        foreach ($this->produtos as $produto) {
            echo $produto->exibir() . PHP_EOL;
        }
    }
}
