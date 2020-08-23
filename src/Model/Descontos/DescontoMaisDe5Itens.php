<?php

namespace src\Model\Descontos;

use src\Model\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeDeItens > 5) {

            return $orcamento->valor * 0.01;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
