<?php

class Kedungkandang {
  public $nama;
  public $alamat;
  public $jamBuka;
  public $rating;

  public function __construct($n, $a, $j, $r)
  {
    $this->nama = $n;
    $this->alamat = $a;
    $this->jamBuka = $j;
    $this->rating = $r;
  }
}

  $kKandang = [];

  $kKandang[] = new Kedungkandang("Suka Ilmu","Jl. Diponegoro no.23","07.00-21.00","4.3/5");
  $kKandang[] = new Kedungkandang("Roman Laundry","Tlogomas","08.00-20.00","4.2/5");
  $kKandang[] = new Kedungkandang("Bengkel Sido Makmur","Jl. Patin No. 43","10.00-19.00","4.0/5");
  ;

  $json = json_encode($kKandang);
  header('content-type:application/json');
  echo $json;
?>
