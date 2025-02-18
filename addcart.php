<?php
session_start(); // Mulakan sesi

// Semak jika borang dihantar
if (isset($_POST['add_to_cart'])) {
    // Ambil data dari borang
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];

    // Semak jika troli sudah ada
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Tambah barang ke troli
    $_SESSION['cart'][] = [
        'id' => $id,
        'nama' => $nama,
        'jumlah' => $jumlah
    ];

    // Redirect ke halaman troli atau halaman lain
    header("Location: cart.php");
    exit(); // Pastikan untuk keluar selepas redirect
}
?>