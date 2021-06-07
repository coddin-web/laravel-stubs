<?php

declare(strict_types=1);

namespace Coddin\Stubs;

use Illuminate\Support\ServiceProvider;

final class CoddinStubsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->offerPublishing();
        $this->registerCommands();
    }

    private function offerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs' => base_path('/stubs')
            ], 'stubs');
        }
    }

    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\InstallCommand::class,
            ]);
        }
    }
}
