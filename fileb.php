<?php
include "koneksi.php";
$nama =$_REQUEST['name'];
$email_kamu =$_REQUEST['email'];
$subject =$_REQUEST['subject'];
$pesan =$_REQUEST['message'];

// var_dump($nama, $email_kamu);

$mysql = "INSERT INTO tbcontactme(Nama, Email_Kamu, Subject, Pesan) VALUES('$nama', '$email_kamu', '$subject', '$pesan')";

$result = mysqli_query($conn, $mysql);

if ($result){
    echo"data yang diiunput berhasil";
}else{
    echo"data gagal diinput";
}
mysqli_close($conn);
?>