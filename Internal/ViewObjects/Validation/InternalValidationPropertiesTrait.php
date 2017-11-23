<?php namespace ZN\ViewObjects\View;

trait InternalValidationPropertiesTrait
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
    // Settings
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $settings = [];

    //--------------------------------------------------------------------------------------------------------
    // method()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $method
    //
    //--------------------------------------------------------------------------------------------------------
    public function method(String $method) : InternalValidation
    {
        $this->settings['method'] = $method;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // value()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function value(String $value) : InternalValidation
    {
        $this->settings['value'] = $value;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // required()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function required() : InternalValidation
    {
        $this->settings['config'][] = 'required';

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // numeric()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function numeric() : InternalValidation
    {
        $this->settings['config'][] = 'numeric';

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // match()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $match
    //
    //--------------------------------------------------------------------------------------------------------
    public function match(String $match) : InternalValidation
    {
        $this->settings['config']['match'] = $match;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // matchPassword()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $match
    //
    //--------------------------------------------------------------------------------------------------------
    public function matchPassword(String $match) : InternalValidation
    {
        $this->settings['config']['matchPassword'] = $match;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // oldPassword()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $oldPassword
    //
    //--------------------------------------------------------------------------------------------------------
    public function oldPassword(String $oldPassword) : InternalValidation
    {
        $this->settings['config']['oldPassword'] = $oldPassword;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // compare()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param numeric $min
    // @param numeric $max
    //
    //--------------------------------------------------------------------------------------------------------
    public function compare(Int $min = NULL, Int $max = NULL) : InternalValidation
    {
        $this->settings['config']['minchar'] = $min;
        $this->settings['config']['maxchar'] = $max;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // between()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param numeric $min
    // @param numeric $max
    //
    //--------------------------------------------------------------------------------------------------------
    public function between(Float $min = NULL, Float $max = NULL) : InternalValidation
    {
        $this->settings['config']['between'] = [$min, $max];

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // betweenBoth()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param numeric $min
    // @param numeric $max
    //
    //--------------------------------------------------------------------------------------------------------
    public function betweenBoth(Float $min = NULL, Float $max = NULL) : InternalValidation
    {
        $this->settings['config']['betweenBoth'] = [$min, $max];

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // validate()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param args
    //
    //--------------------------------------------------------------------------------------------------------
    public function validate(...$args) : InternalValidation
    {
        $this->settings['validate'] = $args;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // secure()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param args
    //
    //--------------------------------------------------------------------------------------------------------
    public function secure(...$args) : InternalValidation
    {
        $this->settings['secure'] = $args;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // pattern()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $pattern
    // @param string $char
    //
    //--------------------------------------------------------------------------------------------------------
    public function pattern(String $pattern, String $char = NULL) : InternalValidation
    {
        $this->settings['config']['pattern'] = presuffix($pattern).$char;

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // phone()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $design
    //
    //--------------------------------------------------------------------------------------------------------
    public function phone(String $design = NULL) : InternalValidation
    {
        if( empty($design) )
        {
            $this->settings['config'][] = 'phone';
        }
        else
        {
            $this->settings['config']['phone'] = $design;
        }

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // alpha()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function alpha() : InternalValidation
    {
        $this->settings['config'][] = 'alpha';

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // alnum()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function alnum() : InternalValidation
    {
        $this->settings['config'][] = 'alnum';

        return $this;
    }

    //--------------------------------------------------------------------------------------------------------
    // captcha() -> 5.4.5[edited]
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function captcha() : InternalValidation
    {
        $this->settings['config'][] = 'captcha';

        return $this;
    }
}
