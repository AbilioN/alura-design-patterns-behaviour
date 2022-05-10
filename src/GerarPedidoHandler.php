<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAoGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\AcoesAoGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /** @var AcoesAoGerarPedido[]  */
    private array $acoesGerarPedido;

    public function __construct(/* PedidoRepository, MailService */)
    {
    }


    public function adicionarAcaoAoGerarPedido(AcaoAoGerarPedido $acao)
    {
        $this->acoesGerarPedido[] = $acao;
    }
    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;


        $pedidosRepository = new CriarPedidoNoBanco();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();


        foreach($this->acoesGerarPedido as $acao)
        {
            $acao->executaAcao($pedido);
        }

        // PedidosRepository
        echo "Cria pedido no banco de dados " . PHP_EOL;
        // MailService
        echo "Envia e-mail para cliente " . PHP_EOL;
        echo "Gerar log de criação de pedido" . PHP_EOL;
    }
}
