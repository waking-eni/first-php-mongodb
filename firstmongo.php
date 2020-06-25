<?php

require_once __DIR__.'/vendor/autoload.php';

//mongodb client for working with db and collections
$client = new MongoDB\Client;

//database
$companydb = $client->companydb;


//collection
/*$result1 = $companydb->createCollection('empcollection');
$result2 = $companydb->createCollection('mycollection');

var_dump($result1);*/

//listing all collections in a database
foreach($companydb->listCollections() as $collection) {
    var_dump($collection);
}

//deleting a collection
//$result2 = $companydb->dropCollection('mycollection');

//listing all databases
foreach($client->listDatabases() as $db) {
    var_dump($db);
}