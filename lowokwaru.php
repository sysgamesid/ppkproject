  <?php

class lowokwaru {
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

  $lwkwaru = [];

  $lwkwaru[] = new lowokwaru("Suka Ilmu","Jl. Diponegoro no.23","07.00-21.00","4.3/5");
  $lwkwaru[] = new lowokwaru("Roman Laundry","Tlogomas","08.00-20.00","4.2/5");
  $lwkwaru[] = new lowokwaru("Bengkel Sido Makmur","Jl. Patin No. 43","10.00-19.00","4.0/5");
  $lwkwaru[] = new lowokwaru("RM Padang Murah","Jl. Diponegoro no. 32","08.00-19.00","4.8/5");
  $lwkwaru[] = new lowokwaru("Bengkel Sekar Maju","Jl. Selangor no.98","10.00-19.00","2.1/5");

  $json = json_encode($lwkwaru);
  header('content-type:application/json');
  echo $json;
?>
