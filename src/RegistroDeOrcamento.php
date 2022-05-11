<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapter;

class RegistroDeOrcamento
{

    private HttpAdapter $http;


    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }


    public function registrar(Orcamento $orcamento) : void
    {
        // chamar api de registro
        if(!$orcamento->estadoAtual instanceof Finalizado)
        {
            throw new \DomainException("Apenas Orcamentos finalizados podem ser inseridos na api");
        }
        $this->hhtp->post('https://api.registrar.orcamento' , [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeItens

        ]);

        
        // enviar dados de orcamento
    }
}