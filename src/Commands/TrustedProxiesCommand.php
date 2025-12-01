<?php

namespace HeyJorgeDev\TrustedProxies\Commands;

use Illuminate\Console\Command;

class TrustedProxiesCommand extends Command
{
    public $signature = 'laravel-trusted-proxies';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
