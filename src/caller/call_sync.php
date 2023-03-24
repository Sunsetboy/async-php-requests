<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use GuzzleHttp\Promise;

require 'vendor/autoload.php';

$promises = [];
echo "Start: " . date('c') . PHP_EOL;

for ($i = 0; $i < 5; $i++) {
    $client = new Client([
                             'base_uri' => 'http://go_service:3000',
                             'timeout' => 2.0,
                         ]);
    $promises[] = $client->getAsync('/');
}

$responses = Promise\Utils::unwrap($promises);

foreach($responses as $response) {
    var_dump((string)$response->getBody());
}

echo "Finish: " . date('c') . PHP_EOL;
