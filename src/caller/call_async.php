<?php

declare(strict_types=1);

use GuzzleHttp\Client;
use GuzzleHttp\Promise;

require 'vendor/autoload.php';

$promises = [];
echo "Start: " . date('c') . PHP_EOL;

$client = new Client([
                         'base_uri' => 'http://go_service:3000',
                         'timeout' => 2.0,
                     ]);

for ($i = 0; $i < 5; $i++) {
    $promises[] = $client->getAsync('/');
}

$responses = Promise\Utils::unwrap($promises);

foreach ($responses as $response) {
    var_dump((string)$response->getBody());
}

echo "Finish: " . date('c') . PHP_EOL;