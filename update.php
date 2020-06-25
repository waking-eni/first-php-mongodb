<?php

require_once __DIR__.'/vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->companydb;
$empcollection = $companydb->empcollection;

//updates first matched result
/*$updateResult = $empcollection->updateOne(
    ['age' => '28'],
    ['$set' => ['age' => '27']]
);

printf("Matched %d documents \n", $updateResult->getMatchedCount());
printf("Modified %d documents \n", $updateResult->getModifiedCount());*/

//update many
/*$updateResult = $empcollection->updateMany(
    ['age' => '28'],
    ['$set' => ['manager' => 'Tim']]
);

printf("Matched %d documents \n", $updateResult->getMatchedCount());
printf("Modified %d documents \n", $updateResult->getModifiedCount());*/

//replace one
/*$replaceResult = $empcollection->replaceOne(
    ['_id' => '4'],
    ['_id' => '4', 'favColor' => 'blue']
);

printf("Matched %d documents \n", $replaceResult->getMatchedCount());
printf("Modified %d documents \n", $replaceResult->getModifiedCount());*/