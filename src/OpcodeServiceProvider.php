<?php
namespace Moviet\Opcache;

use Illuminate\Support\ServiceProvider;

/**
 * Class OpcodeServiceProvider
 * @package Moviet\Opcache
 * \Illuminate\Support\ServiceProvider Multi Versions > Framework 5.0
 */
class OpcodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\ClearCommand::class,
                Commands\ConfigCommand::class,
                Commands\StatusCommand::class,
            ]);
        }
    }
}