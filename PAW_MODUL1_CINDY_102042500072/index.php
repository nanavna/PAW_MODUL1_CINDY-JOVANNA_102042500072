<?php

$produk = [
    [
        "nama" => "Facial Treatment Clear Lotion",
        "kategori" => "Toner",
        "harga" => 2100000,
        "stok" => 8
    ],
    [
        "nama" => "Rouge Blush",
        "kategori" => "Blush on",
        "harga" => 1090000,
        "stok" => 6
    ],
    [
        "nama" => "Wardah UV Shield Sunscreen",
        "kategori" => "Sunscreen",
        "harga" => 85000,
        "stok" => 12
    ],
    [
        "nama" => "The Originote Hyalucera Moisturizer",
        "kategori" => "Moisturizer",
        "harga" => 120000,
        "stok" => 0
    ],
    [
        "nama" => "Avoskin Miraculous Refining Serum",
        "kategori" => "Serum",
        "harga" => 159000,
        "stok" => 5
    ],
    [
        "nama" => "Somethinc Ceramic Skin Saviour",
        "kategori" => "Serum",
        "harga" => 225000,
        "stok" => 4
    ]
];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cia Store</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #fff5f7;
    color: #333;
}

header {
    background-color: #8e5a68;
    padding: 18px 8%;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    color: white;
    font-size: 24px;
    font-weight: bold;
}

nav a {
    color: white;
    text-decoration: none;
    margin-left: 25px;
}

nav a:hover {
    opacity: 0.7;
}

.hero {
    padding: 70px 8%;
    text-align: center;
    background-color: #ffe4ec;
}

.hero h1 {
    font-size: 42px;
    margin-bottom: 15px;
    color: #6d3f4d;
}

.hero p {
    color: #765c64;
    font-size: 18px;
}

.info {
    text-align: center;
    padding: 30px;
}

.info-box {
    display: inline-block;
    background-color: white;
    padding: 20px 40px;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
}

.info-box h2 {
    margin-bottom: 5px;
    color: #8e5a68;
}

.container {
    width: 84%;
    max-width: 1200px;
    margin: auto;
    padding-bottom: 60px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.product-card {
    background-color: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
    transition: transform 0.2s ease;
}

.product-card:hover {
    transform: translateY(-5px);
}

.product-card h3 {
    color: #6d3f4d;
    margin-bottom: 10px;
}

.category {
    color: #999;
    font-size: 14px;
    margin-bottom: 15px;
}

.price {
    color: #8e5a68;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

.normal-price {
    color: #999;
    text-decoration: line-through;
    font-size: 14px;
    margin-bottom: 5px;
}

.discount {
    color: #d85c78;
    font-weight: bold;
    margin-bottom: 5px;
}

.final-price {
    color: #8e5a68;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 15px;
}

.stock {
    margin-bottom: 15px;
    font-weight: bold;
}

.available {
    color: #5b9b6d;
}

.empty {
    color: #d85c78;
}

.buy-button {
    display: block;
    width: 100%;
    text-align: center;
    background-color: #8e5a68;
    color: white;
    padding: 12px;
    border-radius: 8px;
    text-decoration: none;
}

.buy-button:hover {
    background-color: #6d3f4d;
}

.disabled-button {
    display: block;
    width: 100%;
    text-align: center;
    background-color: #ddd;
    color: #888;
    padding: 12px;
    border-radius: 8px;
}

footer {
    background-color: #6d3f4d;
    color: white;
    text-align: center;
    padding: 25px;
}

@media (max-width: 900px) {
    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    nav {
        flex-direction: column;
        gap: 15px;
    }

    nav a {
        margin: 0 8px;
    }

    .hero h1 {
        font-size: 32px;
    }

    .product-grid {
        grid-template-columns: 1fr;
    }

    .container {
        width: 90%;
    }
}

</style>
</head>

<body>

<header>
<nav>
<div class="logo">Cia Store</div>

<div>
<a href="#">Home</a>
<a href="#produk">Produk</a>
</div>

</nav>
</header>

<section class="hero">
<h1>Selamat Datang di Cia Store</h1>
<p>Temukan berbagai produk skincare pilihan untuk merawat kulitmu.</p>
</section>

<section class="info">
<div class="info-box">
<h2><?php echo $jumlahProduk; ?></h2>
<p>Produk Skincare di Katalog</p>
</div>
</section>

<main class="container" id="produk">

<div class="product-grid">

<?php foreach ($produk as $item): ?>

<?php

if ($item["stok"] > 0) {
    $status = "Tersedia";
    $statusClass = "available";
} else {
    $status = "Stok Habis";
    $statusClass = "empty";
}

if ($item["harga"] >= 1000000) {
    $diskon = 10;
    $hargaDiskon = $item["harga"] * $diskon / 100;
    $hargaAkhir = $item["harga"] - $hargaDiskon;
} else {
    $diskon = 0;
    $hargaAkhir = $item["harga"];
}

?>

<article class="product-card">

<h3><?php echo $item["nama"]; ?></h3>

<p class="category">
<?php echo $item["kategori"]; ?>
</p>

<?php if ($diskon > 0): ?>

<p class="normal-price">
Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
</p>

<p class="discount">
Diskon <?php echo $diskon; ?>%
</p>

<p class="final-price">
Rp <?php echo number_format($hargaAkhir, 0, ',', '.'); ?>
</p>

<?php else: ?>

<p class="price">
Rp <?php echo number_format($hargaAkhir, 0, ',', '.'); ?>
</p>

<?php endif; ?>

<p class="stock <?php echo $statusClass; ?>">
<?php echo $status; ?>

<?php if ($item["stok"] > 0): ?>
(<?php echo $item["stok"]; ?> stok)
<?php endif; ?>

</p>

<?php if ($item["stok"] > 0): ?>

<a href="#" class="buy-button">
Beli Sekarang
</a>

<?php else: ?>

<div class="disabled-button">
Tidak Tersedia
</div>

<?php endif; ?>

</article>

<?php endforeach; ?>

</div>

</main>

<footer>
<p>&copy; 2026 Cia Store. All Rights Reserved.</p>
</footer>

</body>
</html>