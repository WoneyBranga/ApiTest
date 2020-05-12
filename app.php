<?php

require __DIR__ . '/vendor/autoload.php';

use ApiTest\People;

$people = new People;

echo $people->getPeoples();
