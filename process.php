<?php
// buat class laptop
class biodata {
  // buat property untuk class laptop
  public $nama;
  public $kelas;
  public $jurusan;
  public $sekolah;

  // buat property untuk class laptop

  protected $email;
  protected $nohp;
  protected $kelamin;
  protected $alamat;

  protected $diprotek = [$email, $nohp, $kelamin, $alamat];

  public function aksesp() {
    return $this->email=$_POST['email'];
  }
  public function akses2() {
    return $this->nohp= $_POST['nohp'];
  }
  public function akses3() {
    return $this->nohp= $_POST['nohp'];
  }
  public function akses4() {
    return $this->alamat= $_POST['alamat'];
  }

//penanda protected
 }
  
// buat objek dari class laptop (instansiasi)
$dbload = new biodata();
  
// set property
$dbload->nama= $_POST['nama'];
$dbload->kelas= $_POST['kelas'];
$dbload->jurusan= $_POST['jurusan'];
$dbload->sekolah= $_POST['sekolah'];

  
// // tampilkan property
// echo $dbload->nama;
// echo "<br />";
// echo $dbload->kelas;
// echo "<br />";
// echo $dbload->jurusan;
// echo "<br />";
// echo $dbload->sekolah;
// echo "<br />";

// // tampilkan protected property
// echo $dbload->penanda_pa();
// echo "<br />";
// echo $dbload->akses_email();
// echo "<br />";
// echo $dbload->akses_nohp();
// echo "<br />";
// echo $dbload->akses_kelamin();
// echo "<br />";
// echo $dbload->akses_alamat();
// echo "<br />";
// ?>