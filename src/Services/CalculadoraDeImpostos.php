<?php

namespace src\Services;

use src\Model\Impostos\Imposto;
use src\Model\Orcamento;

class CalculadoraDeImpostos
{
    /**
     * @param Orcamento $orcamento
     * @param Imposto $imposto
     * @return float
     */
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImpostos($orcamento);
    }
}
