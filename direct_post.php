<?php
// Connect Database
include 'connect.php';
//$con=mysqli_connect("localhost","root","","portofolio")
$name = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Check form kosong
if(empty ($name) || empty ($email) || empty($pesan))
{
    echo "Form ada yang kosong silahkan isi ulang";
}
else{
    $query = mysqli_query($con,"insert into pesan set nama = '$name', email = '$email', pesan = '$pesan'");
    if($query == TRUE){
        echo "Data berhasil ditambahkan";
    }
    else{
        echo "error";
    }
}