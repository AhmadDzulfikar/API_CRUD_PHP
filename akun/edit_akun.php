<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //mendapatkan nilai variable
    $IdAkun = $_POST['id_akun'];
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    //Pembuatan Syntax SQL
    $sql = "UPDATE akun
        SET
            name = '$Name',
            email = '$Email',
            password = '$Password'
        WHERE id_akun = '$IdAkun'";

    //Import File Koneksi Database
    require_once('../koneksi.php');

    //Eksekusi Query database
    if(mysqli_query($con,$sql)){
        echo 'Berhasil mengedit akun';
    }else{
        echo 'Gagal mengedit akun';
    }
    mysqli_close($con);
}
?>