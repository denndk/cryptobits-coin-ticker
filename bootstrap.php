<?php

namespace Cryptobits\CoinTicker;
use Illuminate\Contracts\Events\Dispatcher;
use Cryptobits\CoinTicker\Listeners;

return function (Dispatcher $events) {
    $events->subscribe(Listeners\AddClientAssets::class);
};