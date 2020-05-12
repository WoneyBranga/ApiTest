<?php

namespace ApiTest;

use GuzzleHttp\Client;
use ApiTest\ApiTest;

class People 
{
    public $baseUrl = null;

    public $client = null;

    public function __construct()
    {
        $env = new ApiTest;
        
        $this->client = new Client;
        
        $this->baseUrl = $_SERVER['BASE_URL'];
    }

    public function getPeoples()
    {
        $res = $this->client->request("GET", $this->baseUrl . 'people/');
        return $res->getBody();
    }
}
