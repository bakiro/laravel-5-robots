<?php
namespace Bakiro\Robots;

use Illuminate\Support\Facades\Facade;

/**
 * Class RobotsFacade
 *
 * @package Bakiro\Robots
 */
class RobotsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'robots';
    }
}
