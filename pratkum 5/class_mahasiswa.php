<?php
class Mahasiswa {
    //property
    public $ipk;
    public $nim;
    public $nama;
    public $prodi;
    public $angkatan;

    //method
    function __construct($nim, $nama){
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0) {
            return 'cukup';
        }elseif($this->ipk >= 2.0 && $this->ipk >= 3.0){
            return 'baik';
        }elseif($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'memuaskan';
        }elseif($this->ipk >= 3.75 && $this < 4.0){
            return 'Cum Laude';
        }
    }
}

//ntance Object
$mahasiswa1 = new Mahasiswa(110223, 'muhammad kahlid');
$mahasiswa1->ipk = 3.5;
$mahasiswa1->prodi = "Teknik Informatika";
$mahasiswa1->angkatan = 2023;