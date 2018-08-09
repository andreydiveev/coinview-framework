<?php

namespace CoinView\Framework\Amqp\Facades;

use Illuminate\Support\Facades\Facade;

class AmqpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'amqp';
    }
}
