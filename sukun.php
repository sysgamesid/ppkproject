<?php
class Sukun {
  public $nama;
  public $alamat;
  public $jamBuka;

  public $telepon;

  public function __construct($n, $a, $j, $t)
  {
    $this->nama = $n;
    $this->alamat = $a;
    $this->jamBuka = $j;
    $this->telepon = $t;
  }
}

  $tSukun = [];

  $tSukun[] = new Sukun("Toko Buku Lentera","jl.Yos Sudarso No. 8","07.00-21.00","085233124452");
  $tSukun[] = new Sukun("Dian Ilmu","jl.Merdeka No. 07","08.00-20.00","081233124478");
  $tSukun[] = new Sukun("Bengkel Sumber Kencono","jl.Patimura no. 53","09.00-17.00","081233123457");


  $json = json_encode($tSukun);
  header('content-type:application/json');
  echo $json;

 ?>
