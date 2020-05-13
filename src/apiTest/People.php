<?php

namespace ApiTest;

use GuzzleHttp\Client;
use ApiTest\ApiTest;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;


class People 
{
    public $baseUrl = null;

    public $client = null;

    public $log = null;

    public function __construct()
    {
        $env = new ApiTest;
        
        $this->client = new Client;
        
        $this->baseUrl = $_SERVER['BASE_URL'];

        $this->log = new Logger('name');
        $this->log->pushHandler(new StreamHandler('myTestLog.log', Logger::WARNING));
        $this->log->pushHandler(new FirePHPHandler());
    }

    public function getPeoples()
    {
        $res = $this->client->request("GET", $this->baseUrl . 'people/');
        return $res->getBody();
    }
}
