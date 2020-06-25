<?php

require_once __DIR__.'/vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

//limit find to 4 documents, and also skip 2
//sort by age descending
$documentList = $empcollection->find(
    [],
    [
        'limit' => 4,
        'skip' => 2,
        'sort' => ['age' => -1]
    ]
);

foreach($documentList as $doc) {
    var_dump($doc);
}