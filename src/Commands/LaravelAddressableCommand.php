<?php

namespace Wildwestriverrider\LaravelAddressable\Commands;

use Illuminate\Console\Command;

class LaravelAddressableCommand extends Command
{
    public $signature = 'laravel-addressable';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
