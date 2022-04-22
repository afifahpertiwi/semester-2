<?php

//Buat class 
class NilaiMahsiswa{
    //Buat Propeerti 
    public $nim;
    public $matkul;
    public $nilai;

    // Buat Method Construct
    function __construct($ni, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;

    }

    function hitungnilai(){
        return $this->nilai;
    }

    //Buat Method Grade 
    function grade($keterangan){
        if($keterangan > 55) {
            return "Anda lulus";
        }else {
            return "Anda Tidak Lulus";
        }
}

    //Buat Method Predikat 
    function predikat ($keterangan){
        if ($keterangan >= 85 && $keterangan <=100){
            return "A";
        }elseif ($keterangan >= 70 && $keterangan <=84){
            return "B";
        }elseif ($keterangan >= 56 && $keterangan <= 69){
            return "c";
        }elseif ($keterangan >= 36 && $keterangan <= 55){
            return"D";
        }elseif ($keterangan >= 0 && $keterangan <= 35){
            return"E";
        }else {
            return "I";
        }
    }
}

    ?>