<?php

namespace src\Model\Impostos;

use src\Model\Orcamento;

abstract class ImpostoCom2Aliquotas implements Imposto
{
    public function calculaImpostos(Orcamento $orcamento): float
    {
        return $this->deveAplicarTaxaMaxima($orcamento) ? $this->calculaTaxaMaxima($orcamento) : $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;

    abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;

    abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;
}
