<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>HOME</title>
</head>
<body>
<div class="navbar">
        <div class="gambar"><a href="HOME.html"><img src="bahan/fertilize (1).png" width="150px" alt=""></a></div>
        <div class="search"><input type="search" placeholder="Search"><i class="fa fa-search"></i></div> 
        <div class="kanan">
            <a href="HOME.html">HOME</a>
            <a href="PROFILE.html">PROFILE</a>
            <a onclick="logOut()">LOG OUT</a>
        </div>
    </div>
    <div class="main-container">
        <h1>WELCOME TO FERTILIZE STORE</h1>
        <p class="judulh1">Kami menjual berbagai kebutuhan bertani Anda</p>
    </div>
    <div class="box">
        <div class="tulisanBox">
            <a href="KATEGORI OBAT.html"><h1>OBAT PERTANIAN</h1></a>
            <p>Kami menjual berbagai macam obat pertanian</p>
        </div>
        <img class="obatBrou" src="bahan/obat brou.png" width="50%" alt="">
    </div>
    <div class="box">
        <img class="bibitBrou" src="bahan/bibit brou.png" width="50%" alt="">
        <div class="tulisanBox">
            <a href="KATEGORI BENIH.html"><h1>BIBIT TANAMAN</h1></a>
            <p>Kami menjual berbagai macam obat pertanian</p>
        </div>
    </div>
    <div class="box">
        <div class="tulisanBox">
            <a href="KATEGORI ALAT.html"><h1>ALAT PERTANIAN</h1></a>
            <p>Kami menjual berbagai macam obat pertanian</p>
        </div>
        <img class="alatBrou" src="bahan/alat brou.png" width="50%" alt="">
    </div>

    <div id="TulisanBawah" class="tulisanBawah">
        <h2><a onclick="bestSeller()" id="best">BEST SELLER</a></h2>
        <h2><a onclick="newArrival()" id="new">NEW ARRIVAL</a></h2>
        <h2><a onclick="mostWanted()" id="most">MOST WANTED</a></h2>
    </div>

    <div class="bestseller">
        <a id="href1" href="PESTISIDA INSEKTISIDA.html">
            <div class="dalamBS">
                <img id='gambar1' src="bahan/obat detail.jpeg" width="300px" height="300px" alt="">
                <p id="Nama1">Pestisida Insektisida 247 ZC 274C - 100mL</p>
                <p id="Harga1">Rp 64.000</p>
                <div class="dalam">
                    <p>ADD TO CART</p>
                    <img src="icon/heart.png" width="30px"  height="30px" alt="">
                </div>
            </div>
        </a>
        <a id="href2" href="HERBISIDA RAMBO.html">
            <div class="dalamBS">
                <img id='gambar2' src="bahan/obat detail 2.jpeg" width="300px" height="300px" alt="">
                <p id="Nama2">Herbisida Rambo Gold 480 SL 1 Liter</p>
                <p id="Harga2">Rp 60.000</p>
                <div class="dalam">
                    <p>ADD TO CART</p>
                    <img src="icon/heart.png" width="30px"  height="30px" alt="">
                </div>
            </div>
        </a>
        <a id="href3" href="PESTISIDA INSEKTISIDA.html">
            <div class="dalamBS">
                <img id='gambar3' src="bahan/obat detail 3.jpeg" width="300px" height="300px" alt="">
                <p id="Nama3">Insektisida Regent Red 50SC</p>
                <p id="Harga3">Rp 25.000</p>
                <div class="dalam">
                    <p>ADD TO CART</p>
                    <img src="icon/heart.png" width="30px"  height="30px" alt="">
                </div>
            </div>
        </a>
        <a id="href4" href="Bakterisida Nordox.html">
            <div class="dalamBS">
                <img id='gambar4' src="bahan/obat detail 5.jpeg" width="300px" height="300px" alt="">
                <p id="Nama4">Fungisida / Bakterisida Nordox 56WP</p>
                <p id="Harga4">Rp 25.000</p>
                <div class="dalam">
                    <p>ADD TO CART</p>
                    <img src="icon/heart.png" width="30px"  height="30px" alt="">
                </div>
            </div>
        </a>
    </div>
    <div class="bawah">
        <div class="dalamBawah">
            <img src="bahan/fertilize (1).png" width="300px" alt="">
            <p>Fertilize is a best choice to fulfill your <br> farming needs! Let's start shopping</p>
        </div>
        <div class="sosmed">
            <div class="contact">
                <a href="CONTACT.html"><H2>CONTACT US</H2></a>
            </div>
            <div class="contact2">            
                <img src="icon/facebook (1).png" width="50px" alt="">
                <img src="icon/instagram (2).png" width="50px" alt="">
                <img src="icon/whatsapp (1).png" width="50px" alt="">
            </div>
        </div>
        <audio src="Alte Kameraden (English, German and Chinese Subtitles).mp3"></audio>
    </div>
<script src="https://use.fontawesome.com/0332a7d422.js"></script>
</body>
</html>