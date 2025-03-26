<?php

namespace Abinash\IFSCValidator\Facades;

use Illuminate\Support\Facades\Facade;

class IFSC extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ifsc';
    }
}
