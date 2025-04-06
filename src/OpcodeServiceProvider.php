<?php
namespace Moviet\Opcache;

/**
 * Class OpcodeServiceProvider
 * @package Moviet\Opcache
 * \Illuminate\Support\ServiceProvider Multi Versions > Framework 5.0
 */
class OpcodeServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Moviet\Opcache\Commands\ClearCommand::class,
                Moviet\Opcache\Commands\ConfigCommand::class,
                Moviet\Opcache\Commands\StatusCommand::class,
            ]);
        }
    }
}