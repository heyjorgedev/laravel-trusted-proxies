<?php

namespace HeyJorgeDev\TrustedProxies\Http\Middleware;

use HeyJorgeDev\TrustedProxies\Facades\TrustedProxies;
use Illuminate\Http\Middleware\TrustProxies as LaravelTrustProxies;

class TrustProxies extends LaravelTrustProxies
{
    protected function proxies(): array|string|null
    {
        if (! TrustedProxies::enabled()) {
            return parent::proxies();
        }

        $proxies = TrustedProxies::get();
        if (empty($proxies)) {
            return parent::proxies();
        }

        return $proxies;
    }
}
