<?php namespace ZN\Services\Request;

interface InternalURIInterface
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
    // Get
    //--------------------------------------------------------------------------------------------------------
    //
    // @param scalar $get
    // @param scalar $index
    // @param bool   $while
    //
    //--------------------------------------------------------------------------------------------------------
    public function get($get = 1, $index = 1, Bool $while = false) : String;

    //--------------------------------------------------------------------------------------------------------
    // getNameCount
    //--------------------------------------------------------------------------------------------------------
    //
    // Belirtilen segmentten sonra kaç adet segmentin olduğunu verir.
    //
    // @param string $get
    //
    //--------------------------------------------------------------------------------------------------------
    public function getNameCount(String $get) : Int;

    //--------------------------------------------------------------------------------------------------------
    // getNameAll
    //--------------------------------------------------------------------------------------------------------
    //
    // Belirtilen segmentten sonra tüm segmentleri verir.
    //
    // @param string $get
    //
    //--------------------------------------------------------------------------------------------------------
    public function getNameAll(String $get) : String;

    //--------------------------------------------------------------------------------------------------------
    // getByIndex
    //--------------------------------------------------------------------------------------------------------
    //
    // Belirtilen segment indekslerine göre aralık almak için kullanılır.
    //
    // @param numeric $get
    // @param numeric $get
    //
    //--------------------------------------------------------------------------------------------------------
    public function getByIndex(Int $get = 1, Int $index = 1) : String;

    //--------------------------------------------------------------------------------------------------------
    // getByName
    //--------------------------------------------------------------------------------------------------------
    //
    // Belirtilen segment isimlerine göre aralık almak için kullanılır.
    //
    // @param string $get
    // @param string $get
    //
    //--------------------------------------------------------------------------------------------------------
    public function getByName(String $get, $index = NULL) : String;

    //--------------------------------------------------------------------------------------------------------
    // Segment Array
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function segmentArray() : Array;

    //--------------------------------------------------------------------------------------------------------
    // Total Segments
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function totalSegments() : Int;

    //--------------------------------------------------------------------------------------------------------
    // Segment Count
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function segmentCount() : Int;

    //--------------------------------------------------------------------------------------------------------
    // Segment
    //--------------------------------------------------------------------------------------------------------
    //
    // @param int $seg
    //
    //--------------------------------------------------------------------------------------------------------
    public function segment(Int $seg = 1) : String;

    //--------------------------------------------------------------------------------------------------------
    // Current Segment
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function currentSegment() : String;

    //--------------------------------------------------------------------------------------------------------
    // Current
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  bool   $isPath: true
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function current(Bool $isPath = true) : String;

    //--------------------------------------------------------------------------------------------------
    // active()
    //--------------------------------------------------------------------------------------------------
    //
    // @param bool $fullPath = false
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------
    public function active(Bool $fullPath = false) : String;

    //--------------------------------------------------------------------------------------------------------
    // Base
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  bool   $isPath: true
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function base(String $uri = NULL, Int $index = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Prev
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  bool   $isPath: true
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function prev(Bool $isPath = true) : String;
}
