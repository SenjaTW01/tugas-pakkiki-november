<!DOCTYPE html>
<html>

<head>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,700;1,400;1,700&family=Montserrat:ital,wght@0,600;0,700;1,600;1,700&family=Poppins:ital,wght@0,700;1,600;1,700&display=swap');
    body {
    background-color: #3498db;
    font-family: Arial, sans-serif;
    text-align: center;
    padding: 20px;
    margin: 0;
    }



    .book-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 10px;
    max-width: 300px;
    text-align: center;
    }

    img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
    }

    h2 {
    color: #333;
    font-family: Poppins;
    font-size: 15px;
    }

    .description {
    display: none;
    color: #7D7C7C;
    font-family: 'Montserrat';
    }

    .rating {
    font-weight: bold;
    }

    .button-rounded {
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 20px;
    padding: 10px 20px;
    margin: 10px 5px;
    cursor: pointer;
    }

    .button-rounded:hover {
    background-color: #2980b9;
    }
    </style>
</head>

<body>
    <div class="book-card">
        <img src="senja1.jpg" alt="Gambar Buku">
        <h2>Buku tata cara selingkuh dengan aman</h2>
        <p class="description">Deskripsi buku yang panjang dan informatif.</p>
        <p class="rating">Rating: 4.5</p>
        <button class="button-rounded" onclick="showDescription()">Selengkapnya</button>
        <button class="button-rounded" onclick="addToCart()">Tambah ke Keranjang</button>
    </div>
    <div id="cart-response"></div>
    <script>
        function showDescription() {
            const description = document.querySelector(".description");
            description.style.display = "block";
        }

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Logika untuk menambahkan buku ke keranjang belanja
            // Misalnya, simpan data buku ke dalam session atau database.
            // Kirim respons jika berhasil.
            echo "Buku telah ditambahkan ke keranjang.";
        }
        ?>

        function addToCart() {
            // Simpan logika tambah ke keranjang di sini (gunakan AJAX jika diperlukan).
            // Contoh PHP dapat digunakan untuk mengelola keranjang.
            const response = "Buku telah ditambahkan ke keranjang.";
            document.getElementById("cart-response").innerHTML = response;
        }
    </script>
</body>

</html>