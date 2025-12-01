<?php

namespace HeyJorgeDev\TrustedProxies\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HeyJorgeDev\TrustedProxies\TrustedProxies
 */
class TrustedProxies extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HeyJorgeDev\TrustedProxies\TrustedProxies::class;
    }
}
