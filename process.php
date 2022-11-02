<?php
class biodata {

  // property public
  public $nama;
  public $kelas;
  public $jurusan;
  public $sekolah;

  //property protected
  protected $email;
  protected $nohp;
  protected $kelamin;
  protected $alamat;

//function array call
public function aksesd() {
  $ppb = [
    "nama" => $this->nama = $_POST['nama'],
    "kelas" => $this->kelas = $_POST['kelas'],
    "jurusan" => $this->jurusan = $_POST['jurusan'],
    "sekolah" => $this->sekolah = $_POST['sekolah']
];

return $ppb;
}
}

//child extends from biodata public
class BiodataDefender extends biodata {

//function array call
  public function aksesp() {
    $pdb = [
      "email" => $this->email = $_POST['email'],
      "nohp" => $this->nohp = $_POST['nohp'],
      "kelamin" => $this->kelamin = $_POST['kelamin'],
      "alamat" => $this->alamat = $_POST['alamat']
  ];

  return $pdb;
  }
 }
// instasization data
$dbload = new BiodataDefender();
  
// set property and call to index
$dbloads = $dbload->aksesd();
$dbloadd =  $dbload->aksesp();

?>