<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Tools - SiswaGame</title> 
    <style>
        body {
            background:linear-gradient(brown, black, red); /* Light gray background */
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column; /* Allow footer to be at the bottom */
            min-height: 100vh; /* Full height to allow scrolling */
        }
        .tajuk {
            padding: 20px 0; /* Increased padding */
            text-align: center; /* Center the title */
        }
        .tajuk h1 {
            color: #fff; /* White text for the title */
            margin: 0; /* Remove default margin */
        }
        .menu {
            padding: 10px; /* Padding for the menu */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
            text-align: center; /* Center the menu items */
            border-radius: 10px;
            border-top-color: #666;
            border-bottom-color: #666;
            border-style: solid;
            background-color: #000;
        }
        .menu > a {
            text-decoration: none;
            color: #333; /* Dark gray text color */
            padding: 10px 20px; /* Padding for links */
            margin: 0 10px; /* Margin between links */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
            border-radius: 5px; /* Rounded corners for links */
            font-weight: bold;
            color: #fff;
        }
        .menu > a:hover {
            background-color: #a5ecf5; /* Blue background on hover */
            color: black; /* Black text on hover */
            font-weight: bold;
        }
        .content {
            padding: 20px; /* Padding for content */
            display: flex; /* Flexbox for layout */
            flex-wrap: wrap; /* Allow wrapping of items */
            justify-content: center; /* Center items */
            flex: 1; /* Allow content to grow and take available space */
            overflow: auto; /* Allow scrolling if content overflows */
        }
        .game-card {
            background: #fff; /* White background for cards */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow for depth */
            margin: 15px; /* Margin between cards */
            width: 200px; /* Fixed width for cards */
            overflow: hidden; /* Prevent overflow */
            text-align: center; /* Center text */
            transition: transform 0.3s; /* Smooth scale effect */
        }
        .game-card:hover {
            transform: scale(1.05); /* Scale up on hover */
        }
        .game-card img {
            width: 100%; /* Full width image */
            height: auto; /* Maintain aspect ratio */
        }
        .game-card h3 {
            margin: 10px 0; /* Margin for title */
            font-size: 18px; /* Font size for title */
        }
        .game-card p {
            margin: 0 0 10px; /* Margin for description */
            color: #666; /* Dark gray text for description */
        }
        .game-card button {
            background-color: #4CAF50; /* Green background for button */
            color: white; /* White text for button */
            border: none; /* No border */
            padding: 10px; /* Padding for button */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor */
            transition: background-color 0.3s; /* Smooth transition */
        }
        .game-card button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
        /* Footer */
        footer {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 20px 10px;
            margin-top: auto; /* Push footer to the bottom */
        }

        footer .social-links a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        footer .social-links a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <div class="tajuk">
        <h1 id="tajuk" onmouseover="change1()" onmouseout="change2()">SiswaGame</h1>
        <script>
            function change1() {
                document.getElementById("tajuk").style.color = "yellow";
                document.getElementById("tajuk").style.fontFamily = "Verdana,sans-serif";
            }
            function change2() {
                document.getElementById("tajuk").style.color = "";
                document.getElementById("tajuk").style.fontFamily = "";
            }
        </script>
    </div>
    <div class="menu">
        <a href="home.php">HOME</a>
        <a href="barang.php">PARCEL</a>
        <a href="information.php">INFORMATION</a>
    </div>
    <div class="content">
    <!-- Example Game Card 1 -->
    <div class="game-card">
        <img src="img/game1.jpg" alt="The Last Of Us Part 1">
        <h3>The Last Of Us Part 1</h3>
        <p>Penggembaraan seorang budak dan seorang ayah tunggal yang kehilangan anaknya di dunia yang dipenuhi virus zombie yang pelik</p>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="1"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="The Last Of Us Part 1"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button><br><br>
        </form>
    </div>
        
    <!-- Example Game Card 2 -->
    <div class="game-card">
        <img src="img/game2.jpg" alt="Spider-Man 2">
        <h3>Spider-Man 2</h3>
        <p>Pengembaraan Spider-Man Peter dan Morales</p>
        <br>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="2"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="Spider-Man 2"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
    </div>

    <!-- Example Game Card 3 -->
    <div class="game-card">
        <img src="img/game3.jpg" alt="Tekken 8">
        <h3>Tekken 8</h3>
        <p>Perlawanan antara pemain</p>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="3"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="Tekken 8"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
    </div>

    <!-- Example Game Card 4 -->
    <div class="game-card">
        <img src="img/game4.jpg" alt="Assassin's Creed Mirage">
        <h3>Assassin's Creed Mirage</h3>
        <p>mempunyai jalan cerita seseorang Assasin</p>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="4"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="Assassin's Creed Mirage"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
    </div>

    <!-- Example Game Card 5 -->
    <div class="game-card">
        <img src="img/game5.jpg" alt="God Of War Ragnarok">
        <h3>God Of War Ragnarok</h3>
        <p>seorang pembunuh god dan anaknya</p>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="5"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="God Of War Ragnarok"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
    </div>

    <!-- Example Game Card 6 -->
    <div class="game-card">
        <img src="img/game6.jpg" alt="">
        <h3>Aragami2</h3>
        <p>pengembaraan ninja</p>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="6"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="Aragami2"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
    </div>

    <!-- Example Game Card 7 -->
    <div class="game-card">
        <img src="img/game7.jpg" alt="Assassin's Creed Shadow">
        <h3>Assassin's Creed Shadow</h3>
        <p>Cerita panjang mengenai Assasin Shadows</p>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="7"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="Assassin's Creed Shadow"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
    </div>

    <!-- Example Game Card 8 -->
    <div class="game-card">
        <img src="img/game8.jpg" alt="Call Off Duty Black Ops6"> 
        <h3>Call Off Duty Black Ops6</h3>
        <p>Jalan Cerita Peperangan</p>
        <form action="addcart.php" method="post">
            <input type="hidden" name="id" value="8"> <!-- Gantikan dengan ID sebenar -->
            <input type="hidden" name="nama" value="Call Off Duty Black Ops6"> <!-- Gantikan dengan nama sebenar -->
            <input type="number" name="jumlah" value="1" min="1" required><br><br>
            <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
    </div>
</div>
    <footer>
        <p>© 2024 SiswaGame. All rights reserved.</p>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
    </footer>
</body>
</html>