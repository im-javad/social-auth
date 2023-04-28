<?php

return [
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
        'client_id' => env(key: 'GITHUB_CLIENT_ID'),
        'client_secret' => env(key: 'GITHUB_CLIENT_SECRET'),
        'redirect' => env(key: 'GITHUB_REDIRECT_LINK'),
    ],

    'google' => [
        'client_id' => env(key: 'GOOGLE_CLIENT_ID'),
        'client_secret' => env(key: 'GOOGLE_CLIENT_SECRET'),
        'redirect' => env(key: 'GOOGLE_REDIRECT_LINK'),
    ],

    'facebook' => [
        'client_id' => env(key: 'FACEBOOK_CLIENT_ID'),
        'client_secret' => env(key: 'FACEBOOK_CLIENT_SECRET'),
        'redirect' => env(key: 'FACEBOOK_REDIRECT_LINK'),
    ],
];
