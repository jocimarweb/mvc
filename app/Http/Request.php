<?php

namespace App\Http;

class Request
{
    /**
     * Método HTTP da Requisição.
     *
     * @var string
     */
    private $httpMethod;

    /**
     * URI da Página.
     *
     * @var string
     */
    private $uri;

    /**
     * Parâmetros da URL ($_GET)
     *
     * @var array
     */
    private $queryParams = [];

    /**
     * Variáveis recebidas no POST da página ($_POST)
     *
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho da Requisição.
     *
     * @var array
     */
    private $headers = [];


    public function __construct()
    {
        $this->queryParams  = $_GET ?? [];
        $this->postVars     = $_POST ?? [];
        $this->headers      = getallheaders();
        $this->httpMethod   = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri          = $_SERVER['RESQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar os parâmetros da URL da Requisição.
     *
     * @return array
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as variáveis POST da Requisição.
     *
     * @return array
     */
    public function getPostVars()
    {
        return $this->postVars;
    }

    /**
    * Método responsável por retornar os headers da Requisição.
    *
    * @return array
    */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Método responsável por retornar o método HTTP da Requisição.
     *
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
    * Método responsável por retornar a URI da Requisição.
    *
    * @return string
    */
    public function getUri()
    {
        return $this->uri;
    }
}
