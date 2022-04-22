<?php
class persegipanjang {
    private $panjang;
    private $lebar;
    fucntion __construct($p , $1)
    {
        $this->panjang = $p;
        $this->lebar =$1;

    }
    function getluas()
    {
        return $this->panjang *$this->lebar;
    }
    function getkeliling()
    {
        return 2 * ($this ->panjang * $this->lebar);
    }
}
?>
