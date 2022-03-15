<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja | Alfia Naila Salsabila</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
  <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <h3><center>Belanja Online</center></h3>
            </div>
    </div>
    <br>
  <div class="container-fluid">
 <div class="row">
  <div class="col-md-6">
<form class="form-horizontal mt-3" method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="text" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
</div>
<div class="col-md-6">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
				<div class="list-group-item">
					TV : 4.200.000
				</div>
        <div class="list-group-item">
					Kulkas : 3.100.000
				</div>
        <div class="list-group-item">
					Mesin Cuci : 3.800.000
				</div>
				</div> <a href="#" class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</a>
			</div>
		</div>
    <br/>
    <hr>
    <br/>
<?php
if (isset($_POST['proses'])) {
$proses= $_POST['proses'];
$customer= $_POST['customer'];
$_produk= $_POST['produk'];
$_jumlah= $_POST['jumlah'];
if($_produk == 'TV')$harga=4200000;
if($_produk == 'KULKAS')$harga=3100000;
if($_produk == 'MESIN CUCI')$harga=3800000;
$total_harga= $_jumlah * $harga;


echo '<br/>Nama Customer : '.$customer;

$barang = '';
if ($_produk == "TV"){
  $barang = 'TV';
  echo "<br/>Produk Pilihan : TV";
} elseif ($_produk == "KULKAS"){
  $barang = 'KULKAS';
  echo "<br/>Produk Pilihan : KULKAS";
} elseif ($_produk == "MESIN CUCI"){
  $barang = 'MESIN CUCI';
  echo "<br/>Produk Pilihan : MESIN CUCI";
} else {
  echo "";
}

echo '<br/>Jumlah Beli : '.$_jumlah;
echo '<br/>Total Belanja : Rp'.number_format($total_harga,2,',',',');
} else {
  echo 'Form Belum Disubmit';
}
?>

</body>
</html>