<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
    <div class="container">
    <div class="offset-0 col-8">
    <h2 style="text-align: left;">Belanja Online</h2>
    </div>
    <hr>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="pilih produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="pilih produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="pilih produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="pilih produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="pilih produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="pilih produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-0 col-8">
    <button name="proses" type="submit" value="hitung" class="btn btn-primary">Kirim</button>
    </div>
  </div>
  </div>
</form>
		</div>
		<div class="offset-2">
			<table class="table">
				<thead>
						<th>
							Daftar Harga
						</th>
					<tr>
						<td>
							TV : Rp 4.200.000
						</td>
					</tr>
					<tr class="table">
					<tr>
						<td>
							Kulkas : Rp 3.100.000
						</td>
					</tr>
					<tr class="table">
          <tr>
						<td>
							Mesin Cuci : Rp 3.800.000
						</td>
					</tr>
          <table class="table">
					  <tr>
						<th>
							Harga Dapat Berubah Setiap Saat
						</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
<hr>
<div class="offset-0 col-3">
<?php
$proses = $_POST['proses'];
$nama_customer = $_POST['customer'];
$pilih_produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($pilih_produk == 'TV'){
  $harga_total = 4200000;
}
elseif($pilih_produk == 'Kulkas'){
  $harga_total = 3100000;
}
elseif($pilih_produk == 'Mesin Cuci'){
  $harga_total = 3800000;
}
if($pilih_produk == 'TV'){
  $pilihan_produk = 'televisi';
}
elseif($pilih_produk == 'Kulkas'){
  $pilihan_produk = 'kulkas';
}
elseif($pilih_produk == 'Mesin Cuci'){
  $pilihan_produk = 'mesin cuci';
}

$harga = $harga_total * $jumlah;
if(!empty($proses)){
  echo "Nama Customer : $nama_customer";
  echo "<br/>Produk Pilihan : $pilih_produk";
  echo "<br/>Jumlah Beli : $jumlah";
  echo "<br/>Total Belanja : $harga";
}
?>
</div>
</body>
</html>