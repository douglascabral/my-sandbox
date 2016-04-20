<?php
/**
 * Example MongoDB Connect
 * Install in Ubuntu 15.10:
 * sudo apt-get install php5-mongo
 */

$mongo = new Mongo( 'mongodb://localhost:27017' );
$db = $mongo->selectDB("test");
$collection = $db->selectCollection('mydb');
$collection->insert([
    'firstname' => 'Douglas',
    'lastname'  => 'Cabral'
]);

$cursor = $collection->find();

echo '---------------------------' . PHP_EOL;

foreach ( $cursor as $obj ) {
    echo 'Complete name: ' . $obj['firstname'] . ' ' . $obj['lastname'] . PHP_EOL;
}

echo '---------------------------' . PHP_EOL;

echo 'Total: ' . $cursor->count() . PHP_EOL;
