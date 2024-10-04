<html>
<head>
	<title>DAFTAR MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> 
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>    
     <script src="vendor/bootstrap/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
     <link href="vendor/bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">DATA MAHASISWA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

<?php        
include "koneksi.php";
$npm=$_GET['id'];    
$sql = "SELECT * FROM identitas where npm='$npm' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
    $nama=$row["nama"];
    $alamat=$row["alamat"];
    $jk=$row["jk"];  
    $tgl = date('d-m-Y',strtotime($row['tgl_lahir']));
    $email=  $row["email"];  
    
    }
}
 else
    { 
    $npm="";
    $nama="";
    $alamat="";
    $jk="";  
 }
?> 
    
<div class="container"> 
  <div class="card mt-5">
   <div class="card-header bg-dark text-white"><h6>EDIT BIODATA</h6></div>
     <div class="card-body ml-3">
     <form action="update.php" method="post" class="ml-5">
      <div class="row">    
        <div class="col-lg-2"></div>  
       <div class="col-lg-7">      
		<div class="form-group">
			<label>NPM :</label>
			<input type="text" class="form-control" name="npm" value="<?php echo $npm;?>">
		</div>
		<div class="form-group">
			<label>NAMA :</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
		</div>
        <div class="form-group">
			<label>Alamat :</label>
            <textarea class="form-control" rows="3" name="alamat"><?php echo $alamat;?></textarea>
		</div>
        <div class="form-group">
			<label>Jenis Kelamin :</label><br/>
			<label class="radio-inline"><input type="radio" name="jk" value="L" <?php if($jk=="L"):?>checked="checked" <?php endif;?>> Laki-Laki</label>
            <label class="radio-inline"><input type="radio" name="jk" value="P" <?php if($jk=="P"):?>checked="checked" <?php endif;?>> Perempuan</label>
		</div> 
        <div class="form-group"> <!-- Date input -->
        <label>Tanggal Lahir :</label>
        <input class="form-control datepicker"  name="tgl_lahir" value="<?php echo $tgl;?>" type="text">
       </div>
        <div class="form-group">
			<label>ALAMAT EMAIL :</label>
			<input type="text" class="form-control" name="email" value="<?php echo $email;?>">
		</div>   
           
          <hr> 
           <input type="submit" class="btn btn-primary" value="Update" name="update">
        </div>    
       </div> 
	  </form>		  
   
</div> 
</div>
</div>  
    
<script type="text/javascript">
    
     
 $(function(){
  $(".datepicker").datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>    
</body>
</html>