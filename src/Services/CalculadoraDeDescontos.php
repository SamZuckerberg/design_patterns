<?php

namespace src\Services;

use src\Model\Descontos\DescontoMaisDe500Reais;
use src\Model\Descontos\DescontoMaisDe5Itens;
use src\Model\Descontos\SemDesconto;
use src\Model\Impostos\Imposto;
use src\Model\Orcamento;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
