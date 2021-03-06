<?php

/*
 * This file is part of the DriftPHP Project
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Drift\HttpKernel;

use React\Promise\PromiseInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Interface AsyncEventDispatcherInterface.
 */
interface AsyncEventDispatcherInterface extends EventDispatcherInterface
{
    /**
     * Dispatch an event asynchronously.
     *
     * @param string $eventName
     * @param Event  $event
     *
     * @return PromiseInterface
     */
    public function asyncDispatch(
        string $eventName,
        Event $event
    );

    /**
     * Triggers the listeners of an event.
     *
     * This method can be overridden to add functionality that is executed
     * for each listener.
     *
     * @param callable[] $listeners
     * @param string     $eventName
     * @param Event      $event
     *
     * @return PromiseInterface
     */
    public function doAsyncDispatch(
        array $listeners,
        string $eventName,
        Event $event
    );
}
