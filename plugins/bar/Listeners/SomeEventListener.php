<?php

namespace Plugins\Bar\Listeners;

use Lacora\Events\ExampleEvent;

class SomeEventListener
{
    public function handle(ExampleEvent $event)
    {
        dump('plugin is bar');
    }
}
