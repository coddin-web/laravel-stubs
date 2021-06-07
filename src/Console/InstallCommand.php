<?php

declare(strict_types=1);

namespace Coddin\Stubs\Console;

use Illuminate\Console\Command;

final class InstallCommand extends Command
{
    protected $signature = 'coddin-stubs:install';

    protected $description = 'Install the stubs modified for PSR-12';

    public function handle(): void
    {
        $this->comment('Publishing Coddin Stubs Provider...');
        $this->callSilent('vendor:publish', ['--tag' => 'stubs']);
    }
}
