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


function querycv($querycv){
    global $koneksi;
    $result = mysqli_query($koneksi, $querycv);
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

function addppt($data){
    global $koneksi;

    $link = $data["link"];
    $image = $data["image"];

    $query = "INSERT INTO ppt_table (link, image) VALUES ('$link', '$image')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function addcv($data){
    global $koneksi;

    $link = $data["link"];
    $image = $data["image"];

    $query = "INSERT INTO template_cv (link, image) VALUES ('$link', '$image')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function addwp($data){
    global $koneksi;

    $link = $data["link"];
    $image = $data["image"];

    $query = "INSERT INTO template_cv (link, image) VALUES ('$link', '$image')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}



?>