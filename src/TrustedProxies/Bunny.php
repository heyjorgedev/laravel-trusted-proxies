<?php

namespace HeyJorgeDev\TrustedProxies\TrustedProxies;

use HeyJorgeDev\TrustedProxies\Concerns\TrustedProxiesProvider;
use Illuminate\Support\Facades\Http;

class Bunny implements TrustedProxiesProvider
{
    public function get(): array
    {
        return [
            ...$this->getIPv4(),
            ...$this->getIPv6(),
        ];
    }

    private function getIPv4(): array
    {
        return Http::asJson()
            ->get('https://bunnycdn.com/api/system/edgeserverlist')
            ->json();
    }

    private function getIPv6(): array
    {
        return Http::asJson()
            ->get('https://bunnycdn.com/api/system/edgeserverlist/IPv6')
            ->json();
    }
}
