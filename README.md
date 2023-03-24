## Asynchronous HTTP requests in PHP

This is a proof-of-concept and a sandbox for testing async HTTP requests

### Requirements
Docker

### Installation and running
1. Clone the repository
2. Run `docker-compose build`, then `docker-compose run caller bash`
3. A bash command line inside the docker container will be opened

A Docker compose stack will be launched with 3 containers:
- Caller: makes HTTP requests to Go Service
- Go Service: a simple HTTP server written using Go, accepts multiple connections
- PHP Service: a simple HTTP server written using PHP, accepts one connection at time


Available scripts:

```
// make one test HTTP request
php ping.php

// make 5 sync requests using Guzzle async incorrectly
php call_sync.php

// make 5 parallel requests using Guzzle async
php call_async.php
```
