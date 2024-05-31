<?php

namespace Plugins\Foo;

use Illuminate\Support\Facades\Event;
use Lacora\Events\ExampleEvent;
use Plugins\Foo\Listeners\SomeEventListener;

class Plugin
{
    public function registerListeners()
    {
        Event::listen(ExampleEvent::class, SomeEventListener::class);
    }
}
