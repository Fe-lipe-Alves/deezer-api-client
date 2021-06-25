<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Deezer
 * @package App\Facades
 *
 * @method static object user($id)
 *
 * @see \App\Services\Deezer
 */
class Deezer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Deezer';
    }
}
