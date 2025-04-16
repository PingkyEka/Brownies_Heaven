<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browven - Brownies Heaven</title>
    <link rel="stylesheet" href="\styles.css">
</head>
<body>
<nav class="navbar">
    <div class="brand">
        Brownies Heaven
    </div>
        <div class="nav-links">
            <a href="/pages/product">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
                PRODUCT
            </a>
            <a href="/pages/about-us">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                </svg>
                ABOUT US
            </a>
            <a href="/pages/contact">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>
                CONTACT
            </a>
        </div>
    </div>
</nav>

<section class="hero">
    <h1>BROWVEN</h1>
    <p> Selamat Datang di Surga Brownies! 🍫</p>
</section>
<section class="gallery">
    <div class="carousel">
        <div class="carousel-track">
            <div class="carousel-item"><img src="\image/brwn2.jpg" alt="Brownie 1"></div>
            <div class="carousel-item"><img src="\image/brwn3.jpg" alt="Brownie Muffin"></div>
            <div class="carousel-item"><img src="\image/brwn4.jpg" alt="Chocolate Brownie"></div>
            <div class="carousel-item"><img src="\image/brwn5.jpg" alt="Chocolate Brownie"></div>
            <div class="carousel-item"><img src="\image/brwn6.jpg" alt="Chocolate Brownie"></div>
            <div class="carousel-item"><img src="\image/keju.jpg" alt="Brownie 1"></div>
            <div class="carousel-item"><img src="\image/lumer.jpg" alt="Brownie Muffin"></div>
            <div class="carousel-item"><img src="\image/matcha.jpg" alt="Chocolate Brownie"></div>
            <div class="carousel-item"><img src="\image/classic.jpg" alt="Chocolate Brownie"></div>
            <div class="carousel-item"><img src="\image/brwn6.jpg" alt="Chocolate Brownie"></div>
        </div>
    </div>
</section>
<section class="benefits">
        <h2>Mengapa Memilih Brownies Heaven?</h2>
        <div class="benefits-container">
            <div class="benefit-card">
                <i class="fas fa-star"></i>
                <h3>Kualitas Premium</h3>
                <p>Dibuat dengan bahan berkualitas tinggi</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-cookie"></i>
                <h3>Fresh from Oven</h3>
                <p>Selalu hangat dan fresh setiap hari</p>
            </div>
            <div class="benefit-card">
                <i class="fas fa-shipping-fast"></i>
                <h3>Pengiriman Cepat</h3>
                <p>Layanan pengiriman yang tepat waktu</p>
            </div>
        </div>
    </section>

<script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="-BJtBpuwZNi7c69MSbHp3";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>

<footer>
    <p>@Website Resmi Brownies Heaven Pingky Eka Prastiwi</p>
</footer>
</body>
</html>
