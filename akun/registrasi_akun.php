<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //mendapatkan nilai variable
    $IdAkun = $_POST['id_akun'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    //Pembuatan Syntax SQL
    $sql = "INSERT INTO akun (id_akun,name,email,password) VALUES
    ('$IdAkun','$Name','$Email','$Password')";

    //Import File Koneksi Database
    require_once('../koneksi.php');

    //Eksekusi Query database
    if(mysqli_query($con,$sql)){
        echo 'Berhasil menambahkan akun';
    }else{
        echo 'Gagal menambahkan akun';
    }
    mysqli_close($con);
}
?>