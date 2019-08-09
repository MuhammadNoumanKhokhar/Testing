<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

Interface CollegeFaculty{


    function Area();
}

class StaffFaculty implements CollegeFaculty {

    protected $a;
    protected $b;
    public static $xx = 1000;
    function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        self::$xx = $c;

    }

    public function Area(){
        return $this->a * $this->b;
    }

}




class circular implements CollegeFaculty {

    private $r;

    function __construct()
    {

    }

    public function Area(){
        return 3.14 * $this->r * $this->r;
    }
    function setRadius($rad){
        $this->r = $rad;
    }
    function getRadius(){
        return $this->r;
    }
}

$obj = new circular();

$obj1 = new StaffFaculty(3,4,100);

echo StaffFaculty::$xx;

$obj->setRadius(10);

$area = $obj->Area();





