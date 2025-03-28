<?php
    /**
     * Kelas Lingkuran
     * Kelas untuk menghitung luas dan keliling lingkaran
     */
  class Lingkaran {
    public $jari;
    public const PHI = 3.14;

    public function __construct($r){
        $this->jari = $r;
    }

    public function getLuas(){
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

    public function getKeliling(){
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }

    public function cetak(){
        echo "Jari-jari lingkaran". $this->jari ;
        echo "<br>Luas lingkaran: ". $this->getLuas();
        echo "<br>Keliling lingkaran: ". $this->getKeliling();
    }
  }

?>