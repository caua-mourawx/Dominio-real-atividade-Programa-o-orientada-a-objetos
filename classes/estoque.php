<?php

class Estoque {

    private $produtos = array();

    public function adicionarProduto($produto) {
        $this->produtos[] = $produto;
    }

    public function listarProdutos() {
        foreach ($this->produtos as $produto) {
            $produto->exibirProduto();
        }
    }
}

?>
