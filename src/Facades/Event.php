<?php

namespace Hybrid\Events\Facades;

use Hybrid\Core\Facades\Facade;

/**
 * @see \Hybrid\Events\Dispatcher
 *
 * @method static void listen(\Hybrid\Events\QueuedClosure|callable|array|string $events, \Hybrid\Events\QueuedClosure|callable|array|string|null $listener = null)
 * @method static bool hasListeners(string $eventName)
 * @method static bool hasWildcardListeners(string $eventName)
 * @method static void push(string $event, object|array $payload = [])
 * @method static void flush(string $event)
 * @method static void subscribe(object|string $subscriber)
 * @method static array|null until(string|object $event, mixed $payload = [])
 * @method static array|null dispatch(string|object $event, mixed $payload = [], bool $halt = false)
 * @method static array getListeners(string $eventName)
 * @method static \Closure makeListener(\Closure|string|array $listener, bool $wildcard = false)
 * @method static \Closure createClassListener(string $listener, bool $wildcard = false)
 * @method static void forget(string $event)
 * @method static void forgetPushed()
 * @method static \Hybrid\Events\Dispatcher setQueueResolver(callable $resolver)
 * @method static \Hybrid\Events\Dispatcher setTransactionManagerResolver(callable|null $resolver)
 * @method static mixed defer(callable $callback, string[]|null $events = null)
 * @method static array getRawListeners()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static \Hybrid\Tools\Collection dispatched(string $event, callable|null $callback = null)
 * @method static bool hasDispatched(string $event)
 * @method static array dispatchedEvents()
 */
class Event extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'events';
    }
}
