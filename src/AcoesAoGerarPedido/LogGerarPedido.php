<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAoGerarPedido
{
    public function executaAcao(Pedido $pedido) : void
    {
        echo "gerando Log de pedido";
        
    }
    
}