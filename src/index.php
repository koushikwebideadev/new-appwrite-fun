<?php

require(__DIR__ . '/../vendor/autoload.php');

use Appwrite\Client;
use Appwrite\Exception;
return function ($context) {
    $context->log('Hello, Logs!');
    $context->error('Hello, Errors!');

    if ($context->req->method === 'GET') {

        return $context->res->json([
            'motto' => 'Build like a team of hundreds_',
            'learn' => 'https://appwrite.io/docs',
            'connect' => 'https://appwrite.io/discord',
            'getInspired' => 'https://builtwith.appwrite.io',
        ]);
    }

    // `res.json()` is a handy helper for sending JSON

};
