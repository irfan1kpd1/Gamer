<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tool</title>
    <style>
        body {
            background-color: #6A1E55; /* Dark purple background */
            font-family: Arial, sans-serif; /* Clean font */
            color: white; /* White text color */
            margin: 0; /* Remove default margin */
            padding: 20px; /* Padding for body */
        }

        h2 {
            text-align: center;
            padding-top: 20px;
            margin-bottom: 30px; /* Space below the heading */
        }

        .container {
            width: 80%;
            margin: 0 auto; /* Center the container */
            background-color: white; /* White background for the form */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Padding inside the form */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
        }

        table {
            width: 100%; /* Full width table */
            border-collapse: collapse; /* Remove gaps between cells */
        }

        td {
            padding: 10px; /* Padding for cells */
            text-align: left; /* Left align text */
            color: black;
        }

        input[type="text"], select {
            width: calc(100% - 20px); /* Full width minus padding */
            padding: 10px; /* Padding inside input/select */
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 5px; /* Rounded corners */
        }

        input[type="submit"] {
            background-color: #3d92ff; /* Blue background */
            color: white; /* White text */
            border: none; /* Remove border */
            padding: 10px 20px; /* Padding for button */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor */
            transition: background-color 0.3s ease; /* Smooth transition */
            margin-top: 10px; /* Space above button */
        }

        input[type="submit"]:hover {
            background-color: #2a7bbf; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <h2>Tambah Information Parcel</h2>
    <div class="container">
        <form action="" method="post" onsubmit="return confirmSubmit()">
            <table>
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><input type="text" name="id" required></td>
                </tr>
                <tr>
                    <td>Nama Game</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Kode Game</td>
                    <td>:</td>
                    <td><input type="text" name="kode" required></td>
                </tr>
                <tr>
                    <td>Jumlah Game</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" required></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <input type="submit" name="hantar" value="Hantar">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        function confirmSubmit() {
            return confirm("Are you sure you want to submit this information?");
        }
    </script>

    <?php
    include("config.php");

    if (isset($_POST["hantar"])) {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $kode = $_POST["kode"];
        $jumlah = $_POST["jumlah"];

        $query = mysqli_query($sambungan, "INSERT INTO barang SET
            id = '".$id."',
            nama = '".$nama."',
            kode = '".$kode."',
            jumlah = '".$jumlah."'");

            echo "<script>window.location.href='barang.php';</script>";
        
    }
    ?>
    
</body>
</html>