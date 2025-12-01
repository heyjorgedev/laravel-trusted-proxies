<?php

namespace HeyJorgeDev\TrustedProxies\TrustedProxies;

use HeyJorgeDev\TrustedProxies\Concerns\TrustedProxiesProvider;
use Illuminate\Http\Client\Batch;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Bunny implements TrustedProxiesProvider
{
    public function get(): array
    {
        $responses = Http::batch(fn (Batch $batch) => [
            $batch->asJson()->get('https://bunnycdn.com/api/system/edgeserverlist'),
            $batch->asJson()->get('https://bunnycdn.com/api/system/edgeserverlist/IPv6'),
        ])->send();

        return collect($responses)
            ->map(fn (Response $response) => $response->json())
            ->flatten()
            ->all();
    }
}
