<?php

require __DIR__ . '/vendor/autoload.php';

use ApiTest\People;

$people = new People;

while(true) {
    $people->log->notice('top of while loop...',[["a" =>1], ["b" => 2]]);
    sleep(30);
    $people->log->warning('demo Warning log...', ["xxxx", "yyy"]);
    sleep(30);
    $people->log->error('Error log Example...', [$people->getPeoples()]);
}
