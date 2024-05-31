<?php

namespace Plugins\Bar;

use Illuminate\Support\Facades\Event;
use Lacora\Events\ExampleEvent;
use Plugins\Bar\Listeners\SomeEventListener;

class Plugin
{
    public function registerListeners()
    {
        Event::listen(ExampleEvent::class, SomeEventListener::class);
    }
}
