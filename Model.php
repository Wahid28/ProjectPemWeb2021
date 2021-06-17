<?php

class Database{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "login-projek-yoppy";

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

// class Data{
//     public $nama;

//     public function __construct($nama){
//         $this->nama = $nama;
//     }

//     public function setName($nama){
//         $this->nama = $nama;
//     }
// }

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