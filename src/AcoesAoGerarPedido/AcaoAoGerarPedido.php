<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

interface AcaoAoGerarPedido
{
    public function executaAcao(Pedido $pedido) : void;
}