<?php

namespace src\Model;

use src\Model\EstadosOrcamento\EmAprovacao;
use src\Model\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public float $valor;
    public int $quantidadeDeItens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra(): void
    {

        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }
}
