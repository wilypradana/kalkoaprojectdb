<?php 
$koneksi = mysqli_connect("localhost", "root", "", "kalkoaProject");


// function query
function querycv($querycv){
    global $koneksi;
    $result = mysqli_query($koneksi, $querycv);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
    }
return $rows;

}
function queryposter($queryposter){
    global $koneksi;
    $result = mysqli_query($koneksi, $queryposter);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
    }
return $rows;

}

function queryppt($queryppt){
    global $koneksi;
    $result = mysqli_query($koneksi, $queryppt);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
    }
return $rows;

}


function querywp($querywp){
    global $koneksi;
    $result = mysqli_query($koneksi, $querywp);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
    }
return $rows;
}



?>