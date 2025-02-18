<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Tools</title>
    <style>
        body {
            background-color: #f0f0f0; /* Light gray background */
            margin: 0;
            font-family: 'Arial', sans-serif; /* A clean font */
        }
        .tajuk {
            background-color: #1a1a1a; /* Dark gray for title */
            padding: 20px 0; /* Increased padding */
            text-align: center; /* Center the title */
        }
        .tajuk h1 {
            color: #ffffff; /* White text for title */
            margin: 0; /* Remove default margin */
        }
        .menu {
            background-color: #ffffff; /* White background for the menu */
            padding: 10px; /* Padding for the menu */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
            text-align: center; /* Center the menu items */
        }
        .menu > a {
            text-decoration: none;
            color: #333; /* Dark gray text color */
            padding: 10px 20px; /* Padding for links */
            margin: 0 10px; /* Margin between links */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
            border-radius: 5px; /* Rounded corners for links */
        }
        .menu > a:hover {
            background-color: #a5ecf5; /* Blue background on hover */
            color: black; /* Black text on hover */
            font-weight: bold;
        }
        .parcel-info-section {
            padding: 40px 20px;
            background: #ffffff; /* White background for the section */
            text-align: center;
            border-radius: 10px; /* Rounded corners for the section */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
            margin: 20px; /* Margin around the section */
        }
        .table-container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff; /* White background for the table container */
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        table {
            width: 100%; /* Full width table */
            border-collapse: collapse; /* Remove gaps between cells */
        }
        thead {
            background: #3d92ff; /* Blue for table header */
            color: black; /* Black text for header */
        }
        thead th {
            padding: 12px 15px; /* Padding for header cells */
        }
        tbody tr {
            border-bottom: 1px solid #ddd; /* Border for rows */
        }
        tbody tr:nth-child(even) {
            background: #f9f9f9; /* Light gray for even rows */
        }
        tbody tr:hover {
            background: #e0e0e0; /* Light gray on row hover */
        }
        td, th {
            padding: 10px 15px; /* Padding for cells */
            text-align: left; /* Left align text */
        }
        /* Footer */
        footer {
            background: #1a1a1a; /* Dark gray for footer */
            color: #ffffff; /* White text for footer */
            text-align: center; /* Center align footer text */
            padding: 20px 10px; /* Padding for footer */
            margin-top: 20px; /* Spacing above footer */
        }
        footer .social-links a {
            color: #ffffff; /* White color for links */
            margin: 0 10px; /* Margin between links */
            text-decoration: none; /* Remove underline */
        }
        footer .social-links a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <div class="tajuk" align="center">
        <h1>SiswaGame</h1>
    </div>
    <div class="menu">
    <a href="home.php">HOME</a>
        <a href="barang.php">PARCEL</a>
        <a href="information.php">INFORMATION</a>
    </div>
    <center>
    <section class="parcel-info-section" id="parcel">
        <h2>Information Parcel</h2>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama GAME</th>
                        <th>Kode GAME</th>
                        <th>Jumlah GAME</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($sambungan,"SELECT * FROM barang");
                    while($result = mysqli_fetch_array($query)){
                        echo"
                        <tr>
                        <td>".$result['id']."</td>
                        <td>".$result['nama']."</td>
                        <td>".$result['kode']."</td>
                        <td>".$result['jumlah']."</td>
                        <td><a href='padam.php?id=".$result['id']."' onclick='return confirmDelete()'>Padam</a>
                        <a href='kemaskini.php?id=".$result ['id']."'>kemaskini</a></td>
                        </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br><br>
        <p><a href="tambahbarang.php"><button name='tambah' type="button">Tambah Rekod</button></a></p>
    </section>
    <footer>
        <p>© 2024 SiswaGame. All rights reserved.</p>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
    </footer>
    <script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete this item?");
    }
    </script>
</body>
</html>