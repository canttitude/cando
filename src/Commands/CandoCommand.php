<?php

namespace Canttitude\Cando\Commands;

use Illuminate\Console\Command;

class CandoCommand extends Command
{
    public $signature = 'cando';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
