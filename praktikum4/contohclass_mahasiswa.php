<?php

//Buat class
class Mahasiswa {
    //properti
    var $nim;
    var $nama;
    var $prodi;
    var $ipk;
    function __construct ($nim, $nama) {
        $this->nim = $nim;
        $this->nama =$nama;
    }
    function predikat_ipk() {
        if ($this-> <2.0)return "CUKUP";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) return "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk < 4) return"Cum Laude";
    }
    }
}