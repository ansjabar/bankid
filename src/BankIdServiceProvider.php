<?php

namespace AnsJabar\LaravelBankId;

use Illuminate\Support\ServiceProvider;

class BankIdServiceProvider extends ServiceProvider
{

    /**
     * True when booted.
     *
     * @var bool
     */
    protected $booted = false;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/bankid.php', 'bankid'
        );
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->booted) {
            return;
        }
        $this->publishes([
            __DIR__ . '/config/bankid.php' => config_path('bankid.php'),
        ]);
    }
}
