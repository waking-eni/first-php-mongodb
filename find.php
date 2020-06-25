<?php

require_once __DIR__.'/vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

//find one
/*$document = $empcollection->findOne(
    ['name' => 'Brad']
);*/

//find many
$documentList = $empcollection->find(
    ['skill' => 'php']
);

foreach($documentList as $doc) {
    var_dump($doc);
}