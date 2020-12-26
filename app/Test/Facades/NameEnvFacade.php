<?php

namespace App\Test\Facades;

use Illuminate\Support\Facades\Facade;

class NameEnvFacade extends Facade {
    protected static function getFacadeAccessor() { return 'nameEnv'; }
}
