<?php 
require "../koneksi.php";
$id = $_GET["id"];
$table = $_GET["table"];

if ( hapus($id, $table) > 0) {
    if ($table == "ppt_table") {
        echo "
        <script>
        alert('data berhasil dihapus')
        window.location.href = '../ui-template/templateppt.php'
        </script>
        "; 
        return false;
    } else if ($table == "template_cv") {
        echo "
        <script>
        alert('data berhasil dihapus')
        window.location.href = '../ui-template/templatecv.php'
        </script>
        "; 
        return false;
    } else if ($table == "template_poster") {
        echo "
        <script>
        alert('data berhasil dihapus')
        window.location.href = '../ui-template/templateposter.php'
        </script>
        "; 
        return false;
    } else if ($table == "wp_table") {
        echo "
        <script>
        alert('data berhasil dihapus')
        window.location.href = '../ui-template/templatewp.php'
        </script>
        "; 
        return false;
    }
} else {
    if ($table == "ppt_table") {
        echo "
        <script>
        alert('data gagal dihapus')
        window.location.href = '../ui-template/templateppt.php'
        </script>
        "; 
        return false;
    } else if ($table == "template_cv") {
        echo "
        <script>
        alert('data gagal dihapus')
        window.location.href = '../ui-template/templatecv.php'
        </script>
        "; 
        return false;
    } else if ($table == "../ui-template/template_poster") {
        echo "
        <script>
        alert('data gagal dihapus')
        window.location.href = '../ui-template/templateposter.php'
        </script>
        "; 
        return false;
    } else if ($table == "wp_table") {
        echo "
        <script>
        alert('data gagal dihapus')
        window.location.href = '../ui-template/templatewp.php'
        </script>
        "; 
        return false;
    }
}
?>