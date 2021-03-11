<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for="Nama">Name</label>
                    <input id ="Nama" type="text" name="nama" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="NIM">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="Mata_Kuliah">Lesson</label>
                <select class="form-select form-control" name ="mata_kuliah" class="form-control">
                    <option selected>Choose Lesson :</option>
                    <option value="Pemrograman Web">Web Programming</option>
                    <option value="Basis Data">Database</option>
                    <option value="Statistik">Statiska</option>
                    <option value="PPKN">PKN</option>
                    <option value="UI UX">UI/UX</option>
                </select>
                <div class="form-group">
                    <label for="Nilai_UTS"> UTS Value</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Nilai_UAS">UAS Value</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Nilai_Tugas">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">
            </form>
            </div>
            
            <?php
            if ($_POST)
            {

                @$nama = $_POST['nama'];
                @$nim = $_POST['nim'];
                @$mata_kuliah = $_POST['mata_kuliah'];
                @$nilai_uts = $_POST['nilai_uts'];
                @$nilai_uas = $_POST['nilai_uas'];
                @$nilai_tugas = $_POST['nilai_tugas'];
                @$total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas;
                @$grade_huruf = $total_nilai / 3;
                if ($grade_huruf >= 85){
                    $grade = "A";
                }elseif ($grade_huruf >= 70)
                {   $grade = "B";
                }elseif ($grade_huruf >= 60)
                {   $grade = "C";
                }elseif ($grade_huruf >= 40)
                {   $grade = "D";
                }else{
                    $grade = "E";
                }
                if ( isset ($_POST["nama"]) 
                AND ($_POST["nim"]) 
                AND ($_POST["mata_kuliah"])
                AND ($_POST["nilai_uts"]) 
                AND ($_POST["nilai_uas"])  
                AND ($_POST["nilai_tugas"])){

                }else{
                    echo "Form Belum Lengkap";
                }
            }
            ?>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?php echo @$nama ?> </li>
                    <li class="list-group-item">Nim : <?php echo @$nim ?> </li>
                    <li class="list-group-item">Lesson: <?php echo @$mata_kuliah ?> </li>
                    <li class="list-group-item"> UTS Value : <?php echo @$nilai_uts?> </li>
                    <li class="list-group-item">UAS Value: <?php echo @$nilai_uas ?> </li>
                    <li class="list-group-item">Assignment Value : <?php echo @$nilai_tugas ?> </li>
                    <li class="list-group-item">Value Total: <?php echo @$grade_huruf ?>  </li>
                    <li class="list-group-item">Value in Alphabet: <?php echo @$grade ?> </li>
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C : 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>   
                </ul>
                </div>
        </div>
        
    </div>
</body>
</html>