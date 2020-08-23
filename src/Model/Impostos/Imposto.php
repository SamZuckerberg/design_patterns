<?php

namespace src\Model\Impostos;

use src\Model\Orcamento;

interface Imposto
{
    public function calculaImpostos(Orcamento $orcamento): float;
}
