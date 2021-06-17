<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="CSSSignup.css">

</head>

<body>
    <div class="main-container">
        <form action="" method="get" class="login-container">
            <h1>SIGN UP</h1>
            <div class="signupKolom">
                <input type="text" name="username" id="username" placeholder="Nama"> <br>
                <div class="radio">
                    <p>Gender:</p>
                    <input type="radio" id="male" name="gender" value="1"> <label for="male">Laki</label><br>
                    <input type="radio" id="female" name="gender" value="0"> <label for="male">Perempuan</label><br>
                </div>
                <label for="start">Tanggal Lahir:</label>
                <input type="date" id="start" name="trip-start">
                <input type="text" name="username" id="username" placeholder="Alamat"> <br>
            </div>

            <div class="signupKolom">
                <input type="text" name="username" id="username" placeholder="Kota"> <br>
                <label for="provinsi">Provinsi:</label>
                <select name="provinsi" id="inputAgama">
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
                <input type="text" name="username" id="username" placeholder="Telepon"> <br>
                <input type="text" name="username" id="username" placeholder="Email"> <br>
                <input type="text" name="username" id="username" placeholder="Username"> <br>
            </div>

            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" class="btnSubmit">
            <div id="cancel"><a href="">CANCEL</a> </div>
            </div>
            </form>
    </div>

</body>

</html>