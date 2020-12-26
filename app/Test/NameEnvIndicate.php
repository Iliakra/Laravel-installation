<?php

namespace App\Test;

use App;

class  NameEnvIndicate {
    public function showName() {
        echo App::environment().', '.config('homework.name');
    }
}
