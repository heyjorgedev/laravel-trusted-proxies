<?php

namespace HeyJorgeDev\TrustedProxies\TrustedProxies;

use HeyJorgeDev\TrustedProxies\Concerns\TrustedProxiesProvider;

class Cloudflare implements TrustedProxiesProvider
{
    public function get(): array {}
}
