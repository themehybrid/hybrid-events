<?php

namespace Hybrid\Events\Core;

use function Hybrid\Events\event;

trait Dispatchable {
    /**
     * Dispatch the event with the given arguments.
     *
     * @param mixed ...$arguments
     *
     * @return mixed
     */
    public static function dispatch( ...$arguments ) {
        return event( new static( ...$arguments ) );
    }

    /**
     * Dispatch the event with the given arguments if the given truth test passes.
     *
     * @param bool  $boolean
     * @param mixed ...$arguments
     *
     * @return mixed
     */
    public static function dispatchIf( $boolean, ...$arguments ) {
        if ( $boolean ) {
            return event( new static( ...$arguments ) );
        }
    }

    /**
     * Dispatch the event with the given arguments unless the given truth test passes.
     *
     * @param bool  $boolean
     * @param mixed ...$arguments
     *
     * @return mixed
     */
    public static function dispatchUnless( $boolean, ...$arguments ) {
        if ( ! $boolean ) {
            return event( new static( ...$arguments ) );
        }
    }
}
