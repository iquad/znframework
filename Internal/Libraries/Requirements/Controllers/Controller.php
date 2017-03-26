<?php namespace Project\Controllers;

class Controller
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Public View
    //--------------------------------------------------------------------------------------------------------
    //
    // @param stdClass
    //
    //--------------------------------------------------------------------------------------------------------
    public $view;

    //--------------------------------------------------------------------------------------------------------
    // Public Wizard
    //--------------------------------------------------------------------------------------------------------
    //
    // @param stdClass
    //
    //--------------------------------------------------------------------------------------------------------
    public $wizard;

    //--------------------------------------------------------------------------------------------------------
    // Public Masterpage
    //--------------------------------------------------------------------------------------------------------
    //
    // @param stdClass
    //
    //--------------------------------------------------------------------------------------------------------
    public $masterpage;

    //--------------------------------------------------------------------------------------------------------
    // Construct
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        if( defined('static::restore') )
        {
            \Restoration::mode(static::restore);
        }

        $this->view       = new \stdClass;
        $this->wizard     = new \stdClass;
        $this->masterpage = new \stdClass;

        \ZN::$use =& $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // Get
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $class
    //
    //--------------------------------------------------------------------------------------------------------
    public function __get($class)
    {
        if( ! isset($this->$class) )
        {
            return $this->$class = uselib($class);
        }
    }
}

class_alias('Project\Controllers\Controller', 'Controller');
