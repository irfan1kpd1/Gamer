<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troli - SiswaGame</title>
    <style>
        body {
            background-color: #f0f0f0; /* Warna latar belakang */
            font-family: Arial, sans-serif; /* Font untuk teks */
            margin: 0;
            padding: 20px; /* Padding untuk badan */
        }

        h2 {
            text-align: center; /* Pusatkan tajuk */
            color: #333; /* Warna teks */
        }

        .container {
            max-width: 800px; /* Lebar maksimum untuk kontena */
            margin: 0 auto; /* Pusatkan kontena */
            background: #fff; /* Latar belakang putih */
            padding: 20px; /* Padding untuk kontena */
            border-radius: 10px; /* Sudut bulat */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Bayangan untuk kedalaman */
        }

        table {
            width: 100%; /* Lebar penuh untuk jadual */
            border-collapse: collapse; /* Gabungkan sempadan */
            margin-top: 20px; /* Margin atas untuk jarak */
        }

        th, td {
            padding: 10px; /* Padding untuk sel */
            text-align: left; /* Teks kiri */
            border-bottom: 1px solid #ddd; /* Sempadan bawah untuk sel */
        }

        th {
            background-color: #4CAF50; /* Latar belakang hijau untuk tajuk */
            color: white; /* Teks putih untuk tajuk */
        }

        tr:hover {
            background-color: #f1f1f1; /* Warna latar belakang untuk hover */
        }

        a {
            display: inline-block; /* Paparkan sebagai blok */
            margin-top: 20px; /* Margin atas untuk jarak */
            padding: 10px 20px; /* Padding untuk pautan */
            background-color: #4CAF50; /* Latar belakang hijau */
            color: white; /* Teks putih */
            text-decoration: none; /* Tiada garis bawah */
            border-radius: 5px; /* Sudut bulat */
            transition: background-color 0.3s; /* Transisi untuk hover */
        }

        a:hover {
            background-color: #45a049; /* Warna latar belakang lebih gelap untuk hover */
        }

        .remove-button {
            background-color: #f44336; /* Latar belakang merah untuk butang hapus */
            color: white; /* Teks putih */
            border: none; /* Tiada sempadan */
            padding: 5px 10px; /* Padding untuk butang */
            border-radius: 5px; /* Sudut bulat */
            cursor: pointer; /* Penunjuk tetikus untuk butang */
        }

        .remove-button:hover {
            background-color: #d32f2f; /* Warna latar belakang lebih gelap untuk hover */
        }

        .pay-button {
            background-color: #4CAF50; /* Latar belakang hijau untuk butang bayar */
            color: white; /* Teks putih */
            border: none; /* Tiada sempadan */
            padding: 10px 20px; /* Padding untuk butang */
            border-radius: 5px; /* Sudut bulat */
            cursor: pointer; /* Penunjuk tetikus untuk butang */
            margin-top: 20px; /* Margin atas untuk jarak */
            display: block; /* Paparkan sebagai blok */
            text-align: center; /* Pusatkan teks */
        }

        .pay-button:hover {
            background-color: #45a049; /* Warna latar belakang lebih gelap untuk hover */
        }
    </style>
</head>
<body>
    <h2>Troli</h2>
    <div class="container">
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Aksi</th> <!-- Tambah kolum untuk aksi -->
                </tr>
                <?php foreach ($_SESSION['cart'] as $key => $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['id']); ?></td>
                        <td><?php echo htmlspecialchars($item['nama']); ?></td>
                        <td><?php echo htmlspecialchars($item['jumlah']); ?></td>
                        <td>
                            <form method="post" action="remove_item.php">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($item['id']); ?>">
                                <button type="submit" class="remove-button">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <!-- Pay Now Button -->
            <form method="post" action="process_payment.php">
                <button  type="submit" class="pay-button">Bayar Sekarang</button>
            </form>
        <?php else: ?>
            <p>Troli anda kosong.</p>
        <?php endif; ?>
        <br>
        <a href="home.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>