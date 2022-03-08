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
  
<div class="row" style="padding:10px">
  <div class="col-8">
      <h4><div class="shadow p-2 mb-3 bg-body rounded">Form Belanja</div></h4>
      <hr>
    <form method="POST" action="form_belanja.php" >
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="Customer Name" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Choose Your Product</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="RAM 16GB"> 
                <label for="produk_0" class="custom-control-label">RAM 16GB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="HDD Sumsang 1TB"> 
                <label for="produk_1" class="custom-control-label">HDD Sumsang 1TB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Flashdisk 16GB"> 
                <label for="produk_2" class="custom-control-label">Flashdisk 16GB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_3" type="radio" class="custom-control-input" value="SSD Sumsang 1TB"> 
                <label for="produk_3" class="custom-control-label">SSD Sumsang 1TB</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_4" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_4" class="custom-control-label">PC Gaming Case</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Amount</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Amount" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <input type="submit" class="btn btn-primary" value="Purchase"/>
            </div>
        </div>
    </form>
  </div>
  <div class="col-4">
  <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Price List</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RAM 16GB : $100</th>

    </tr>
    <tr>
      <th scope="row">HDD Sumsang 1TB : $40</th>
    </tr>
    <tr>
      <th scope="row">Flashdisk 16GB : $10</th>
    </tr>
    <tr>
      <th scope="row">SSD Sumsang 1TB : $149</th>
    </tr>
    <tr>
      <th scope="row">PC Gaming Case : $27</th>
    </tr>
  </tbody>
  <thead class="table-primary">
    <tr>
      <th scope="col">Limited Prices!</th>

    </tr>
  </thead>
</table>

  </div>
</div>
<hr>
<div class="col-4">
<div class="shadow p-2 mb-4 bg-body rounded">Your Order</div>
   
   <?php

    $proses = $_POST["proses"];
    $customer = $_POST["customer"];
    $produk = $_POST["produk"];
    $jumlah = $_POST["jumlah"];

    switch ($produk) {
      case 'RAM 16GB':
        $harga = 100;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;

      case 'HDD Sumsang 1TB':
        $harga = 40;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
        
      case 'Flashdisk 16GB':
        $harga = 10;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
          
      case 'SSD Sumsang 1TB':
        $harga = 149;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
      case 'PC Gaming Case':
        $harga = 27;
        $harga = $harga * $jumlah;
        echo "Costumer Name : " .$customer;
        echo "<br> Your Product : " .$produk;
        echo "<br> Buy Amount : " .$jumlah;
        echo "<br> Total : $ " .number_format($harga,0,',','.') . ",-";
        break;
        default:
        break;
    }
    ?>
  </div>
</fieldset>


    
</body>
</html>