<?php        
include "koneksi.php"; 

//input data
if(isset($_POST['submit']))
{   
 $npm=$_POST['npm'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 if (isset($_POST['jk']))
 {
   $jk=$_POST['jk'];     
  } 
 
 $tgl = date('Y-m-d',strtotime($_POST['tgl_lahir']));    
 $email=$_POST['email'];
 
 if((!empty($npm)) && (!empty($nama)))  
  {     
   $sql = "INSERT INTO identitas (npm, nama, alamat,jk,tgl_lahir,email)
   VALUES ('$npm', '$nama', '$alamat','$jk','$tgl','$email') ";
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
  }
    else
    {
      echo "npm dan nama tidak boleh kosong";     
    }
}
$conn->close();

?>

