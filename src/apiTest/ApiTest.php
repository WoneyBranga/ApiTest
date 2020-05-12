<?php

namespace ApiTest;

use GuzzleHttp\Client;
use Dotenv\Dotenv;

class ApiTest 
{
    public $client = null;
        
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__."/../../");
        $dotenv->load();
        
        $this->client = new Client();
    }
    
}
