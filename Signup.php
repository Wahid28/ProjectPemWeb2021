<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="CSSSignup.css">

</head>

<body>
    <?php include "Model.php"; ?>
    <div class="main-container">
        <form action="Model.php" method="get" class="login-container">
            <h1>SIGN UP</h1>
            <div class="signupKolom">
                <input type="text" name="nama" id="nama" placeholder="Nama"> <br>
                <div class="radio">
                    <p>Gender:</p>
                    <input type="radio" id="male" name="gender" value="1"> <label for="male">Laki</label><br>
                    <input type="radio" id="female" name="gender" value="0"> <label for="male">Perempuan</label><br>
                </div>
                <label for="start">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">
                <input type="text" name="alamat" id="alamat" placeholder="Alamat"> <br>
            </div>

            <div class="signupKolom">
                <input type="text" name="kota" id="kota" placeholder="Kota"> <br>
                <label for="provinsi">Provinsi:</label>
                <select name="provinsi" id="provinsi">
                    <option> Banda Aceh 
                    <option> Sumatera Utara  
                    <option> Sumatera Barat 
                    <option> Riau 
                    <option> Kepulauan Riau
                    <option> Jambi 
                    <option> Bengkulu 
                    <option> Sumatera Selatan 
                    <option> Kepulauan Bangka Belitung 
                    <option> Lampung 
                    <option> Banten 
                    <option> Jawa Barat 
                    <option> DKI Jakarta 
                    <option> Jawa Tengah 
                    <option> DI Yogyakarta 
                    <option> Jawa Timur 
                    <option> Bali 
                    <option> Nusa Tenggara Barat 
                    <option> Nusa Tenggara Timur 
                    <option> Kalimantan Utara 
                    <option> Kalimantan Barat 
                    <option> Kalimantan Tengah 
                    <option> Kalimantan Selatan 
                    <option> Kalimantan Timur 
                    <option> Gorontalo 
                    <option> Sulawesi Utara 
                    <option> Sulawesi Barat 
                    <option> Sulawesi Tengah 
                    <option> Sulawesi Selatan 
                    <option> Sulawesi Tenggara 
                    <option> Maluku Utara 
                    <option> Maluku 
                    <option> Papua 
                    <option> Papua Barat 
                </select> <br> <br>
                <input type="text" name="telepon" id="telepon" placeholder="Telepon"> <br>
                <input type="text" name="email" id="email" placeholder="Email"> <br>
                <input type="text" name="username" id="username" placeholder="Username"> <br>
            </div>

            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" name="btnSignup" id="btnSignup" class="btnSubmit" value="Submit">
            <div id="cancel"><a href="Home3.php">CANCEL</a> </div>
        </form>
    </div>

</body>

</html>