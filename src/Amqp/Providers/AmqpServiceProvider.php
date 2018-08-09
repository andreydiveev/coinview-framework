<?php

namespace CoinView\Framework\Amqp\Providers;

use CoinView\Framework\Amqp\Amqp;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AmqpServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('amqp', function()
        {
            return new Amqp();
        });
    }
}
