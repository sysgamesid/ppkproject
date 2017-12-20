<?php

class blimbing {
  public $nama;
  public $alamat;
  public $jamBuka;
  public $tlp;
  public $rating;

  public function __construct($n, $a, $j, $r, $t)
  {
    $this->nama = $n;
    $this->alamat = $a;
    $this->jamBuka = $j;
    $this->rating = $r;
	  $this->tlp = $t;
  }
}

  $blb = [];

  $blb[] = new blimbing("RM Bunda Vera","Jl. Bandeng no.23","07.00-21.00","081392000129","4.3/5");
  $blb[] = new blimbing("Toko Sembako Nur","Jl. Bandeng no.32","08.00-20.00","085738281928","4.2/5");
  $blb[] = new blimbing("DestaComp","Jl. Pena No. 43","10.00-19.00","083329102929","4.0/5");
  $blb[] = new blimbing("Dormacorp","Jl. Cemara no. 32","08.00-19.00","081128392838","4.8/5");
  $blb[] = new blimbing("Postima","Jl. Guntur no.98","10.00-19.00","089948281723","2.1/5");

  $json = json_encode($blb);
  header('content-type:application/json');
  echo $json;
?>
