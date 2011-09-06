<?php

namespace FOS\JsRoutingBundle\Response;

class RoutesResponse
{
    public $baseUrl;
    public $routes;

    public function __construct($baseUrl, array $routes)
    {
        $this->baseUrl = $baseUrl;
        $this->routes = $routes;
    }

    public function getBase_Url()
    {
        return $this->baseUrl;
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}