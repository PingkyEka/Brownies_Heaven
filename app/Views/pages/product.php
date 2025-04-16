<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="\styles.css">
</head>
<body>
<div class="navbar">
        <div class="brand">
            Brownies Heaven
        </div>
        <div class="nav-links">
            <a href="/pages/index"> HOME </a>
        </div>
    </div>

<div class="product-container">
    <?php if (isset($products) && count($products) > 0) : ?>
        <?php foreach ($products as $row) : ?>
            <div class="product-card">
                <img src="<?= base_url('image/' . $row['image']) ?>" alt="<?= $row['varian'] ?>" class="product-image">
                <div class="product-info">
                    <h2 class="product-title"><?= $row['varian'] ?? 'produk' ?></h2>
                    <p>Stok: <?= $row['stok'] ?></p>
                    <p>Harga: Rp<?= number_format((float)$row['harga'], 2, ',', '.') ?></p>
                    <a 
                        class="btn-order"
                        href="https://wa.me/6282286414868?text=Saya%20ingin%20memesan%20<?= urlencode($row['varian'] ?? '') ?>%0A%0AJumlah%20pembelian%3A%20%0A%0AMetode%20pengiriman%3A%20antar%2Fambil%0A%0ATanggal%20pengambilan%2Fpengantaran%3A%20%0A%0AAlamat%20pengantaran%20(jika%20antar)%3A%20"
                        target="_blank">
                        Order
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p style="text-align: center;">Tidak ada product</p>
    <?php endif; ?>
</div>
<footer>
    <p>@Website Resmi Brownies Heaven Pingky Eka Prastiwi</p>
</footer>
</body>
</html>