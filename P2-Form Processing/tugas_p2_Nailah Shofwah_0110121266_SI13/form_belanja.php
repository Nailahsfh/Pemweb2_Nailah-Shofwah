<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>form belanja</title>
  <style>
    body {
      max-width: 1000px;
      margin: auto;
    }
    .div {
      border: 1px solid black;
      display: flex;
      gap: 20px;
      padding: 10px;
    }
    .main {
      width: 60%;
    }
    .harga {
      padding: 10px;
      display: grid;
      align-items: center;
      width: 300px;
      height: 300px;
    }
    .sm {
      font-size: 30px;
    }
  </style>
</head>
<body>
  <div class='m-3 div'>
    <div class='main'>
      <h1 class='sm'>Belanja Online</h1>
      <hr>
      <form method="POST" action="form_belanja.php" autocomplete="off">
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label font-weight-bold" for='customer'>Customer</label> 
            <div class="col-8">
                <input id="customer" name='customer' placeholder="Nama Customer" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4 font-weight-bold">Pilih Produk</label> 
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk1" type="radio" class="custom-control-input" value="TV"> 
                  <label for="produk1" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk2" type="radio" class="custom-control-input" value="Kulkas"> 
                  <label for="produk2" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk3" type="radio" class="custom-control-input" value="Mesin_Cuci"> 
                  <label for="produk3" class="custom-control-label">MESIN CUCI</label>
                </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label font-weight-bold">Jumlah</label> 
            <div class="col-8">
              <input id="jumlah" name='jumlah' placeholder="Jumlah" type="text" class="form-control" required="required">
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="proses" type="kirim" class="btn btn-success">Kirim</button>
            </div>
          </div>
      </form>
    </div>
    <div class='harga'>
      <aside>
        <div class="list-group">
          <div class="list-group-item list-group-item-action active">Daftar harga</div>
          <div class="list-group-item">TV : 4.200.000</div>
          <div class="list-group-item">kulkas : 3.100.000</div>
          <div class="list-group-item justify-content-between">Mesin Cuci : 3.800.000</div> 
          <div class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</div>
        </div>
      </aside>
    </div>
  </div>
  <div class="m-5 border border-dark p-4 rounded">
    <?php
      if(isset($_POST['proses'])){
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        switch($produk){
          case 'TV' : $nama_produk = 'TV'; break;
          case 'Kulkas' : $nama_produk = 'Kulkas'; break;
          case 'Mesin_Cuci' : $nama_produk = 'Mesin Cuci'; break;
          default: $nama_produk = '';
        }

       if($produk == 'TV') {
         $total_harga = $jumlah * 4200000;
       }elseif($produk == 'Kulkas') {
         $total_harga = $jumlah * 3100000;
       }elseif($produk == 'Mesin_Cuci') {
         $total_harga = $jumlah * 3800000;
       }

        echo 'Nama : ' .$customer.'<br>';
        echo 'Produk : ' .$produk.'<br>';
        echo 'Jumlah Beli : ' .$jumlah.'<br>';
        echo 'Total Belanja : Rp. '.number_format($total_harga).".-";

      }
    ?>
  </div>
</body>
</html>