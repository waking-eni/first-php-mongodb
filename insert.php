<?php

require_once __DIR__.'/vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

//insert a single element
/*$insertOneResult = $empcollection->insertOne(
    ['name' => 'Ethan', 'age' => '28', 'skill' => 'php']
);*/

//insert many elements
$insertManyResult = $empcollection->insertMany([
    ['name' => 'Brad', 'age' => '26', 'skill' => 'mongoDB'],
    ['name' => 'Chris', 'age' => '30', 'skill' => 'nodejs'],
    ['name' => 'Debbie', 'age' => '22', 'skill' => 'angular']
]);

/*printf("Inserted %d documents", $insertOneResult->getInsertedCount());
var_dump(($insertOneResult->getInsertedId()));*/

printf("Inserted %d documents", $insertManyResult->getInsertedCount());
var_dump(($insertManyResult->getInsertedIds()));