<?php

namespace Webbie\MeteoblueApi\Commands;

use Illuminate\Console\Command;

class MeteoblueApiCommand extends Command
{
    public $signature = 'meteoblue-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
