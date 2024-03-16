<?php
require_once 'navbar.html';
require_once 'sidebar.html';
?>


<h2>Pratikum3</h2>
<div class="container">
        <h2>Form Registrasi Nurul Fikri</h2>

    <form method="POST">
    <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
        <input id="nim" name="nim" type="text" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="name" name="name" type="text" class="form-control">
        </div>
    </div>



<?php
require_once 'footer.html';

?>