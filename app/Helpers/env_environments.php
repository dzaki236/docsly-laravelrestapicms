<?php

use App\Models\Environment;

if (!function_exists('env_environments')) {
    # code...
    function env_environments()
    {
        // return all env class on models
        $environment = Environment::find(1);
        return $environment;
    }
}
