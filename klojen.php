<?php

class klojen {
  public $nama;
  public $alamat;
  public $jamBuka;
  public $tlp;
  public $rating;

  public function __construct($n, $a, $j, $t, $r)
  {
    $this->nama = $n;
    $this->alamat = $a;
    $this->jamBuka = $j;
    $this->rating = $r;
	$this->tlp = $t;
  }
}

  $klj = [];

  $klj[] = new klojen("Dorman Sport","Jl. merdeka no.23","07.00-21.00","081392000129","4.3/5");
  $klj[] = new klojen("Toko Sembako Nur","Jl. Ciliwung no.32","08.00-20.00","085738281928","4.2/5");
  $klj[] = new klojen("DestaComp","Jl. Pena No. 43","10.00-19.00","083329102929","4.0/5");
  $klj[] = new klojen("Dormacorp","Jl. Cemara no. 32","08.00-19.00","081128392838","4.8/5");
  $klj[] = new klojen("Postima","Jl. Guntur no.98","10.00-19.00","089948281723","2.1/5");

  $json = json_encode($klj);
  header('content-type:application/json');
  echo $json;
?>
