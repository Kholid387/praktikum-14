<?php
class persegipanjang {
    //Property
    public $panjang;
    public $lebar;

    //Method
    function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getLuas(){
        return $this->panjang * $this->lebar;
    }
    function getKeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
    
}
//Intance Object
$persegi_panjang = new PersegiPanjang(10, 5);
echo "Luas persegi panjang  = " . $persegi_panjang->getLuas();
echo "<br>Keliling persegi panjang = " . $persegi_panjang->getKeliling();