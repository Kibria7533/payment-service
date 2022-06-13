<?php

namespace App\Providers;

use App\Events\MakeOrder\MakeOrderEvent;
use App\Listeners\Order\StockToPaymentMakeOrderListener;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        MakeOrderEvent::class => [
            StockToPaymentMakeOrderListener::class
        ]
    ];

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
