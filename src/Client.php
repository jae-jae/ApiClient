<?php
/**
 * Created by PhpStorm.
 * User: x
 * Date: 16-9-8
 * Time: 上午12:35
 */

namespace Jaeger;

use GuzzleHttp\Client as GzHttp;

 abstract class Client
{
    protected $http;

     public function __construct($envPath)
     {
         $dotenv = new \Dotenv\Dotenv($envPath);
         $dotenv->load();

         $this->http = new GzHttp([
             'base_uri' => getenv('API_HOST')
         ]);
     }
}