<?php

namespace Plugins\Foo\Listeners;

use Lacora\Events\ExampleEvent;

class SomeEventListener
{
    public function handle(ExampleEvent $event)
    {
        dump('plugin is foo');
    }
}
