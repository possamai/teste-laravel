<?php

namespace Possamai\TesteLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Possamai\TesteLaravel\Skeleton\SkeletonClass
 */
class TesteLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'teste-laravel';
    }
}
