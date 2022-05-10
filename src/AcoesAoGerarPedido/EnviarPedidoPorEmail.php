<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoAoGerarPedido
{
    public function executaAcao(Pedido $pedido) : void
    {
        echo "enviar pedido por email";
        
    }
}