<?php

namespace Webbie\MeteoblueApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webbie\MeteoblueApi\MeteoblueApi
 */
class MeteoblueApi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Webbie\MeteoblueApi\MeteoblueApi::class;
    }
}
