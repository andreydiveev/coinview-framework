<?php

namespace CoinView\Framework\Amqp\LogEvent;

use CoinView\Framework\Amqp\Amqp;

class AmqpLogEventListener
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LogEvent  $event
     * @return void
     */
    public function handle(LogEvent $event)
    {
        Amqp::publish('logstash.debug', json_encode($event->data));
    }
}
