<?php 
$koneksi = mysqli_connect("localhost", "root", "", "kalkoaProject");



function queryppt($queryppt){
    global $koneksi;
    $result = mysqli_query($koneksi, $queryppt);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
    }
return $rows;

}






?>