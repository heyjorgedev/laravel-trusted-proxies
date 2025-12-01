<?php

namespace HeyJorgeDev\TrustedProxies\Commands;

use HeyJorgeDev\TrustedProxies\Facades\TrustedProxies;
use Illuminate\Console\Command;

class ReloadCommand extends Command
{
    public $signature = 'trusted-proxies:reload';

    public $description = 'My command';

    public function handle(): int
    {
        TrustedProxies::reload();

        $this->info('All done!');

        return self::SUCCESS;
    }
}
