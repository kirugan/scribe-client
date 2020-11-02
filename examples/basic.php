<?php

use Kirugan\Scribe\Logger;

require_once __DIR__ . '/../vendor/autoload.php';

$logger = new Logger('localhost', 1463);
$logger->setPrefix('php');
while (true) {
    sleep(1);
    $logger->error("Hi, John!");
    printf("Iteration\n");
}
