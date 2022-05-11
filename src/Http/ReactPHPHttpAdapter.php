<?php

namespace Alura\DesignPattern\Http;


class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // instancia o react php
        // prepara os dados
        // 
        echo "React Php";
    }

}