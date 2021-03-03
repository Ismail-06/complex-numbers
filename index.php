<?php
class MathClass {
    public $num1;
    public $num2;
    public function __construct($x1, $x2)
    {
        $this->num1 = $x1;
        $this->num2 = $x2;
    }

    public function sumNum(){
        return $this->num1 + $this->num2;
    }

    public function subNum(){
        return $this->num1 - $this->num2;
    }
    public function divNum(){
        return $this->num1 * $this->num2;
    }
    public function multiNum(){
        return $this->num1 / $this->num2;
    }
}

$obj = new MathClass(2,5);
echo $obj->sumNum();
echo $obj->subNum();
echo $obj->divNum();
echo $obj->multiNum();


