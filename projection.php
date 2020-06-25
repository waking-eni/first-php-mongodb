<?php

require_once __DIR__.'/vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

//show just name
//exclude id, as it is set to always show otherwise
$documentList = $empcollection->find(
    ['skill' => 'php'],
    ['projection' => ['_id' => 0, 'name' => 1]]
);

foreach($documentList as $doc) {
    var_dump($doc);
}