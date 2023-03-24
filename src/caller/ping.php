<?php

declare(strict_types=1);

use GuzzleHttp\Client;

require 'vendor/autoload.php';

$client = new Client([
    'base_uri' => 'http://go_service:3000',
    'timeout' => 2.0,
]);

$response = $client->request('GET', '/');
echo $response->getBody()->getContents() . PHP_EOL;
