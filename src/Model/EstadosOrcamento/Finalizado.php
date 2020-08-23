<?php

namespace src\Model\EstadosOrcamento;

use src\Model\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamentos finalizados não pode receber descontos!');
    }
}
