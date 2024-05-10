<?php
// Memanggil file koneksi database
require '../dbkoneksi.php';

// Memeriksa apakah parameter id telah diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // Mulai transaksi
        $dbh->beginTransaction();

        // Query untuk menghapus data periksa yang terkait dengan dokter yang akan dihapus
        $sqlDeletePeriksa = "DELETE FROM periksa WHERE dokter_id = ?";
        $stmtDeletePeriksa = $dbh->prepare($sqlDeletePeriksa);
        $stmtDeletePeriksa->execute([$id]);

        // Query untuk menghapus data dokter berdasarkan id
        $sql = "DELETE FROM dokter WHERE id = ?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$id]);

        // Commit transaksi jika tidak ada kesalahan
        $dbh->commit();

        // Redirect ke halaman index.php setelah proses penghapusan selesai
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        // Rollback transaksi jika terjadi kesalahan
        $dbh->rollBack();
        // Tampilkan pesan kesalahan
        echo "Error: " . $e->getMessage();
        exit;
    }
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
?>
