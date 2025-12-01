<?php

return [
    'provider' => env('TRUSTED_PROVIDER'),

    'providers' => [
        'bunny' => [
            'driver' => \HeyJorgeDev\TrustedProxies\TrustedProxies\Bunny::class,
        ],

        'cloudflare' => [
            'driver' => \HeyJorgeDev\TrustedProxies\TrustedProxies\Cloudflare::class,
        ],
    ],
];
