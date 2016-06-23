<?php
    /**
    * Example of JWT Algorithm with Pure PHP
    * @author Douglas Cabral <contato@douglascabral.com.br>
    *
    */

    $key = 'your-secret-key-here';
    $header = [
        'typ' => 'JWT',
        'alg' => 'HS256'
    ];
    $header = json_encode($header);
    $header = base64_encode($header);
    $payload = [
        'iss' => 'douglascabral.com.br',
        'username' => 'douglascabral',
        'email' => 'contato@douglascabral.com.br'
    ];
    $payload = json_encode($payload);
    $payload = base64_encode($payload);
    $signature = hash_hmac('sha256', "{$header}.{$payload}", $key, true);
    $signature = base64_encode($signature);
    $token = "{$header}.{$payload}.{$signature}";
    echo $token;
