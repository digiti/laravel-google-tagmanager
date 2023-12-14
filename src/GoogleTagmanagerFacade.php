<?php

namespace Digiti\GoogleTagmanager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Digiti\GoogleShoppingFeed
 */
class GoogleTagmanagerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-tagmanager';
    }
}
