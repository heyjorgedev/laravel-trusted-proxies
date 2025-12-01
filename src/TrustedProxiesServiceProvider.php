<?php

namespace HeyJorgeDev\TrustedProxies;

use HeyJorgeDev\TrustedProxies\Commands\TrustedProxiesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TrustedProxiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-trusted-proxies')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_trusted_proxies_table')
            ->hasCommand(TrustedProxiesCommand::class);
    }
}
