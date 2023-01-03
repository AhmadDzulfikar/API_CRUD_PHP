<?php
require_once('../koneksi.php');
if(isset($_GET['email'])){
    $email = $_GET['email'];
}
$result = array();
$query = mysqli_query($con,"SELECT * FROM akun ORDER BY id_akun DESC");
while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($result, JSON_PRETTY_PRINT);
?>