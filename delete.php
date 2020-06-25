<?php

require_once __DIR__.'/vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

//delete one
/*$deleteResult = $empcollection->deleteOne(
    ['_id' => '4']
);

printf("Deleted %d documents", $deleteResult->getDeletedCount());*/

//delete many
/*$deleteResult = $empcollection->deleteMany(
    ['name' => 'Ethan']
);

printf("Deleted %d documents", $deleteResult->getDeletedCount());*/