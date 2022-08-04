<?php

use MillionMile\GetEnv\Env;

if (!function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param string $key
     * @param null|mixed $default
     */
    function env($key, $default = null)
    {
        echo Env::get($key, $default);
    }
}