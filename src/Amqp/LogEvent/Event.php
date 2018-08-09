<?php

namespace CoinView\Framework\Amqp\LogEvent;

use Illuminate\Queue\SerializesModels;

abstract class Event
{
    use SerializesModels;
}
