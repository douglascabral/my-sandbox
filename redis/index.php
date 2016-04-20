<?php
require 'vendor/autoload.php';
try {
    $client = new Predis\Client([
        'scheme' => 'tcp',
        'host'   => '127.0.0.1',
        'port'   => 6379,
    ]);

    $client->set('foo', 'bar');
    $value = $client->get('foo');
    echo $value . PHP_EOL;
    
} catch (Exception $e) {
    echo 'Erro ao se conectar com Redis' . PHP_EOL;
}
