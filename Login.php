<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="CSSLogin2.css">

</head>

<body>
    <?php include "Model.php"; ?>
    <div class="main-container">
        <div class="login-container" style="height:40%;">
            <h1>LOG IN</h1>
            <form action="Model.php" method="get">
                <input type="text" name="nama" id="nama" placeholder="Username"> <br>
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="submit" name="submitLogin" id="submitLogin"> 
                <div id="cancel"><a href="">CANCEL</a> </div>
                <p >Belum daftar? <a href="Signup.php" style="color:orange;">Daftar</a></p>
            </form>
        </div>
    </div>

</body>

</html>