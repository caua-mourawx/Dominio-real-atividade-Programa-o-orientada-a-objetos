<?php

class Caixa {

    private $total = 0;

    public function registrarVenda($produto) {
        $this->total += $produto->getPreco();

        echo "Produto vendido: " . $produto->getNome() . "<br>";
        echo "Preço: R$ " . number_format($produto->getPreco(), 2, ',', '.') . "<br><br>";
    }

    public function mostrarTotal() {
        echo "<strong>Total da compra: R$ " .
             number_format($this->total, 2, ',', '.') .
             "</strong>";
    }
}

?>
