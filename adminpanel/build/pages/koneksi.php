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
function queryposter($queryposter){
    global $koneksi;
    $result = mysqli_query($koneksi, $querypos);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
    }
return $rows;

}

// function add
function addcv($data){
    global $koneksi;

    $link = $data["url"];
    $image = uploadImage();
    if (!$image) {
        return false;
    }
    $query = "INSERT INTO template_cv (link, image) VALUES ('$link', '$image')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// function ubah
function ubahcv($data){
    global $koneksi;
    
    $link = $data["url"];
    $id = $data["id"];
    $gambarLama = $data["gambarLama"];
   
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    }else{
        $image = uploadImage();
    }
    $query = "UPDATE template_cv SET link = '$link', image = '$image' WHERE id = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function ubahppt($data){
    global $koneksi;
    
    $link = $data["url"];
    $id = $data["id"];
    $gambarLama = $data["gambarLama"];
   
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    }else{
        $image = uploadImage();
    }
    $query = "UPDATE ppt_table SET link = '$link', image = '$image' WHERE id = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function ubahposter($data){
    global $koneksi;
    
    $link = $data["url"];
    $id = $data["id"];
    $gambarLama = $data["gambarLama"];
   
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    }else{
        $image = uploadImage();
    }
    $query = "UPDATE template_poster SET link = '$link', image = '$image' WHERE id = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
function ubahwp($data){
    global $koneksi;
    
    $link = $data["url"];
    $id = $data["id"];
    $gambarLama = $data["gambarLama"];
   
    if ($_FILES["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    }else{
        $image = uploadImage();
    }
    $query = "UPDATE wp_table SET link = '$link', image = '$image' WHERE id = $id ";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}



function addppt($data){
    global $koneksi;

    $link = $data["link"];
    $image = $data["image"];

    $query = "INSERT INTO ppt_table (link, image) VALUES ('$link', '$image')";

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

function addposter($data){
    global $koneksi;

    $link = $data["link"];
    $image = $data["image"];

    $query = "INSERT INTO template_poster (link, image) VALUES ('$link', '$image')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// function hapus
function hapus($id, $table){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM $table WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

// function image

function uploadImage(){
    

    $namaFile = $_FILES["gambar"]["name"]; 
    $ukuranFile = $_FILES["gambar"]["size"]; 
    $tmp = $_FILES["gambar"]["tmp_name"]; 
    $error = $_FILES["gambar"]["error"]; 

    if ($error === 4 ) {
        echo "
        <script>
        alert('pilih gambar')
        </script>
        "; 
        return false;
    }

    // cek hanya gambar yang di upload

    $ekstensiGambarValid = ["jpg", "jpeg", "png"];
    $ekstensiGambar = explode(".", $namaFile);
    $ekstensiGambar =strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
        alert('ekstensi gambar tidak sesuai')
        </script>
        "; 
        return false;
    }

    if ($ukuranFile > 3145728) {
        echo "
        <script>
        alert('ukuran gambar terlalu besar')
        </script>
        "; 
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmp, "/opt/lampp/htdocs/kalkoaProject/assets/cv/" . $namaFile);

    return $namaFile;
}

?>