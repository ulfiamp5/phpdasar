<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="olshop.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for="Custumer"> Custumer</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="item" id="inlineRadio3" value="mesin cuci">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Total_item">Total Item</label>
                    <input type="text" name="total_item" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>
                <label for="Kurir">Courier Type</label>
                <select class="form-select form-control" name = "kurir" class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Go-jek">Gojek</option>
                </select>
                <div class="form-group mt-3">
                    <label for="Alamat">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="biaya_ongkir">Courier Cost</label>
                    <input type="text" name="biaya_ongkir" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Jaminan">Assurance Cost</label>
                    <input type="text" name="jaminan" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="submit" class="btn btn-success btn-sm btn-block">
            </form>
            </div>
             
            <?php
            if ($_POST){
                @$custumer = $_POST['nama'];
                @$item = $_POST['item'];
                @$total_item = $_POST['total_item'];
                @$tanggal = $_POST['tanggal'];
                @$kurir = $_POST['kurir'];
                @$alamat = $_POST['alamat'];
                @$ongkir = $_POST['ongkir'];
                @$asuransi =$_POST['asuransi'];

                if ($item == "tv"){
                    $price = 3000000;
                } elseif ($item == "kulkas"){
                    $price = 6000000;
                }  elseif ($item == "mesin cuci"){
                    $price = 4000000;
                }


                @$total_harga = $price * $total_item + $ongkir + $asuransi;


                if ( isset ($_POST["nama"]) 
                AND ($_POST["item"]) 
                AND ($_POST["total_item"])
                AND ($_POST["tanggal"]) 
                AND ($_POST["kurir"])  
                AND ($_POST["alamat"]) 
                AND ($_POST["ongkir"]) 
                AND ($_POST["asuransi"])){

                }else{
                    echo "Form Belum Lengkap";
                }
            }
            ?>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= @$custumer ?> </li>
                    <li class="list-group-item">Item : <?= @$item ?> </li>
                    <li class="list-group-item">Date Shipping : <?= @$tanggal ?> </li>
                    <li class="list-group-item">Courier Type : <?= @$kurir ?> </li>
                    <li class="list-group-item">Shipping Address : <?= @$alamat ?></li>
                    <li class="list-group-item">Courier Cost : <?= @$ongkir ?> </li>
                    <li class="list-group-item">Assurance Cost : <?= @$asuransi ?> </li>
                    <li class="list-group-item">Total Cost : <?= @$total_harga ?>  </li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>