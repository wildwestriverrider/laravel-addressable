<?php

namespace Wildwestriverrider\LaravelAddressable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wildwestriverrider\LaravelAddressable\LaravelAddressable
 */
class LaravelAddressable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Wildwestriverrider\LaravelAddressable\LaravelAddressable::class;
    }
}
