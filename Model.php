<?php

class Database{
    public $servername;
    public $username;
    public $password;
    public $dbname;

    public function connectDB(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login-projek-yoppy";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        // echo "Connected";
    }
}


// class Data{
//     public $nama;
    // public $gender;
    // public $tanggalLahir;
    // public $alamat;
    // public $kota;
    // public $provinsi;
    // public $telepon;
    // public $email;
    // public $username;
    // public $password;

    // public function __construct($nama) {
    //     $this->nama = $nama;
        // $this->gender = $gender;
        // $this->tanggalLahir = $tanggalLahir;
        // $this->alamat = $alamat;
        // $this->kota = $kota;
        // $this->provinsi = $provinsi;
        // $this->telepon = $telepon;
        // $this->email = $email;
        // $this->username = $username;
        // $this->password = $password;
    // }

    // public function get_Data(){
    //     return $this->$nama;
    // }

    // public function inputData(){
    //     connectDB();
    //     $sql = "INSERT INTO `user` (`id`, `nama`, `nim`, `password`) VALUES (NULL, '".$_GET["nama"]."', '".$_GET["nim"]."', '".$_GET["password"]."')";

    //     if ($conn->query($sql) === TRUE) {
    //         echo "New record created successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }
    //     $conn->close();

    // }

// }

class dataLogin{
    public $username;
    public $password;

    public function __construct($nama, $password){
        $this->nama = $nama;
        $this->password = $password;
    }

    // public function getData(){
    //     if (isset($_GET["submitLogin"])) {
    //         if (empty($_GET["nama"])){
    //             echo "Data tidak lengkap <br>";
    //         } else{
    //             echo $_GET["nama"].$_GET["password"];
    //         }
    //     }
    // }
}

if (isset($_GET["submitLogin"])) {
    if (empty($_GET["nama"])){
        echo "Data tidak lengkap <br>";
    } else{
        echo $_GET["nama"].$_GET["password"];
    }
}

class Fruit {
    public $name;
    public $color;
  
    function __construct($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
}

?>

<!-- , $gender, $tanggalLahir, $alamat, $kota, $provinsi, $telepon, $email, $username, $password -->