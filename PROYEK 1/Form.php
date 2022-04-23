<?php
include_once 'Header.php';
include_once 'Sidebar.php';
?>
<?php 
require_once 'pasien.php';
require_once 'BMI.php';
require_once 'BMIPasien.php';

$pasien1 = new pasien();
$pasien1->kode = $_POST['kode'];
$pasien1->nama = $_POST['nama'];
$pasien1->gender = $_POST['gender'];
$pasien1->tanggal = $_POST['tanggal'];

$bmi1 = new BMI($_POST['berat'], $_POST['tinggi']);
$bmipasien1 = new BMIPasien($bmi1, $pasien1);
$ar_bmi = [$bmipasien1];
?>

<form method="POST">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="form-group row">
    <label for="tanggal" class="col-3 col-form-label">Tanggal Periksa</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukkan tanggal periksa" type="text" class="form-control" aria-describedby="tanggal"> 
      <span id="tanggal" class="form-text text-muted">yyyy-mm-dd</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-3 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" placeholder="Masukkan Kode anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-3 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan nama anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-3 col-form-label">Gender</label> 
    <div class="col-8">
      <select id="gender" name="gender" class="custom-select">
        <option value="P">Perempuan</option>
        <option value="L">Laki-laki</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-3 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="berat" name="berat" placeholder="Masukkan berat badan anda" type="text" class="form-control" aria-describedby="berat"> 
      <span id="berat" class="form-text text-muted">Kg</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-3 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" placeholder="Masukkan tinggi anda" type="text" class="form-control" aria-describedby="tinggi"> 
      <span id="tinggi" class="form-text text-muted">Cm</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th>NO</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2022-01-10</td>
            <td>P001</td>
            <td>Ahmad</td>
            <td>L</td>
            <td>69.8</td>
            <td>169</td>
            <td>24.7</td>
            <td>Kelebihan berat badan</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2022-01-10</td>
            <td>P002</td>
            <td>Rina</td>
            <td>P</td>
            <td>55.3</td>
            <td>165</td>
            <td>20.3</td>
            <td>Normal(Ideal)</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2022-01-11</td>
            <td>P003</td>
            <td>Lutfi</td>
            <td>L</td>
            <td>45.2</td>
            <td>171</td>
            <td>15.4</td>
            <td>Kekurangan berat badan</td>
        </tr>
        <?php $nomor = 4; 
              foreach($ar_bmi as $obj){ 
        ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $obj->pasien->tanggal; ?></td>
                <td><?= $obj->pasien->kode; ?></td>
                <td><?= $obj->pasien->nama; ?></td>
                <td><?= $obj->pasien->gender; ?></td>
                <td><?= $obj->bmi->berat; ?></td>
                <td><?= $obj->bmi->tinggi; ?></td>
                <td><?= $obj->bmi->nilaiBMI(); ?></td>
                <td><?= $obj->bmi->statusBMI(); ?></td>
            </tr>
        <?php $nomor++;} ?>
    </tbody>
</table>
              </div></div>