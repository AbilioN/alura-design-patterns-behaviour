<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAoGerarPedido
{

    public function executaAcao(Pedido $pedido) : void
    {
        echo "salvando pedido no  banco de dados";
    }
}

