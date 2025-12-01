<?php

namespace HeyJorgeDev\TrustedProxies;

use HeyJorgeDev\TrustedProxies\Concerns\TrustedProxiesProvider;
use Illuminate\Container\Attributes\Config;
use Illuminate\Support\Facades\Cache;

class TrustedProxies
{
    public function __construct(
        #[Config('trusted-proxies')] protected array $config,
    ) {}

    public function enabled(): bool
    {
        return (bool) $this->config['provider'];
    }

    public function get(): array
    {
        return Cache::get('trusted-proxies', []);
    }

    public function reload(): void
    {
        if (! $this->enabled()) {
            return;
        }

        $provider = data_get($this->config, "providers.{$this->config['provider']}");
        if (! $provider) {
            return;
        }

        /** @var TrustedProxiesProvider $driver */
        $driver = app($provider['driver']);

        Cache::forever('trusted-proxies', $driver->get());
    }
}
