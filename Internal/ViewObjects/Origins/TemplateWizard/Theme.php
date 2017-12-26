<?php namespace Project\Controllers;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */
class Theme
{
    //--------------------------------------------------------------------------------------------------------
    // Active
    //--------------------------------------------------------------------------------------------------------
    //
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    public static $active = NULL;

    //--------------------------------------------------------------------------------------------------------
    // Active
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $active
    //
    //--------------------------------------------------------------------------------------------------------
    public static function active(String $active = 'Default')
    {
        self::$active = $active;
    }
}

class_alias('Project\Controllers\Theme', 'Theme');
