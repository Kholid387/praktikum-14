<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="coutainer">
        <h2>form nilai siswa</h2>
        <form>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select" required="required">
        <option value="PW2">Pemrograman Web2</option>
        <option value="UI/Ux">UI/UX</option>
        <option value="Basdat">Basis Data</option>
        <option value="Jarkom">Jaringan Komputer</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Tugas" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="Tugas" name="Tugas" placeholder="Nilai UTS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for=" UAS" class="col-4 col-form-label">NIlai UAS</label> 
    <div class="col-8">
      <input id=" UAS" name=" UAS" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Niali Tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="Niali Tugas" name="Niali Tugas" placeholder="Nilai TUgas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</body>
<body>
    <div class="container">
</div>
<?php
if (isset($_GET['submit'])) {
// Menangkap data input
$name = $_GET['name'];
$matkul = $_GET['matkul'];
$UTS = $_GET['UTS'];
$UAS = $_UAS['UAS'];
$Tugas = $_GET['Tugas'];

    echo "<br>Nama Siswa : " . $name;
    echo "<br>Mata Kuliah :" . $matkul;
    echo "<br>Nilai UTS :" . $UTS;
    echo "<br>Nilai UAS :" . $UAS;
    echo "<br>Nilai TUgas :" . $Tugas;
}
?>
</body>
</html>