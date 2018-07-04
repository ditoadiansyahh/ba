<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap 3 Contact form with Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
  <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
 <div class="container">
    <form class="well form-horizontal" action=" " method="post"  id="ba_form">
    <fieldset>

<!-- Form Name -->
<legend>Form Berita Acara</legend>

<div class="form-group">
  <label class="col-md-4 control-label">Judul Berita Acara</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="judul" placeholder="Judul" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Tanggal</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="tanggal" class="form-control"  type="date">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Lokasi</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="lokasi" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Pihak 1</label>  
</div>

<div class="form-group">
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nik" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nama" class="form-control"  type="text" disabled>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Jabatan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="jabatan" class="form-control"  type="text" disabled>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Pihak 2</label>  
</div>

<div class="form-group">
  <label class="col-md-4 control-label">NIK</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nik2" class="form-control"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Nama</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="nama2" class="form-control"  type="text" disabled>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Jabatan</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <input  name="jabatan2" class="form-control"  type="text" disabled>
    </div>
  </div>
</div>


<div class="form-group">
                        <label class="col-md-4 control-label">Statement</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="barangmasuk" /> Barang masuk
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="barangkeluar" /> Barang keluar
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="custom" /> Custom
                                </label>
                            </div>
                        </div>
                    </div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
<textarea rows="4" cols="50" name="comment" form="ba_form" disabled>
Enter text here...</textarea>
    </div>
  </div>
</div>


</body>
</html>