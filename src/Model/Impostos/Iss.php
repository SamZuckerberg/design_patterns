<?php

namespace src\Model\Impostos;

use src\Model\Orcamento;

class Iss implements Imposto
{
    public function calculaImpostos(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
