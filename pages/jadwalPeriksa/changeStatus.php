<?php
include '../../config/koneksi.php';
session_start();
    // Ambil nilai dari form
    $id = $_GET['id'];
    $status = $_GET['status'];

    if ($status == '1') {
        $changeStatus = mysqli_query($mysqli, "UPDATE jadwal_periksa SET status = '0' WHERE id = '$id'");
        if ($changeStatus) {
            echo '<script>alert("Jadwal dinonaktifkan");window.location.href = "../../jadwalPeriksa.php"</script>';
        }
        else{
            echo '<script>alert("Jadwal gagal dinonaktifkan");window.location.href = "../../jadwalPeriksa.php"</script>';
        }
    }
    if ($status == '0') {
        $changeStatus = mysqli_query($mysqli, "UPDATE jadwal_periksa SET status = '1' WHERE id = '$id'");
        if ($changeStatus) {
            echo '<script>alert("Jadwal diaktifkan");window.location.href = "../../jadwalPeriksa.php"</script>';
        }
        else{
            echo '<script>alert("Jadwal gagal diaktifkan");window.location.href = "../../jadwalPeriksa.php"</script>';
        }
    }


// Tutup koneksi
mysqli_close($mysqli);
?>