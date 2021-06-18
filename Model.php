<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login-projek-yoppy";

$conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected";


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
    if ($_GET["nama"] == NULL || $_GET["password"] == NULL){
        echo "Data tidak lengkap <br>";
    } else{
        $nameLogin = $_GET["nama"];
        $passLogin = $_GET["password"];

        $sql = "SELECT username, 'pass' FROM `user`";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
            echo $row["username"] . $row["pass"] . "<br>" . $nameLogin . $passLogin;
            if($passLogin == $row["pass"]){
                echo "Login Berhasil";
            } else{
                echo "Login Gagal";
            }
        }

        $conn->close();

        // var_dump($result);
        // echo $_GET["nama"];
        // echo $_GET["password"];
    }
}

// $sql = "SELECT id, nama, nim, 'password' FROM `authors`";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         echo "<table><tr><th>ID</th><th>Name<th><th>NIM<th><th>Password</th></tr>";
//     // output data of each row
//     while($row = $result->fetch_assoc()){
//         echo  "<tr><td><br>". $row["id"] ."<td><td>     ". $row["nama"]. "<td><td>     ". $row["nim"]. "<td><td>     ". $row["password"] . "</td></tr>";
//         };
//         echo "</table>";

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

<!-- '".$_GET["nama"]."' -->

<!-- WHERE nama = 'dnxhill_'  -->

<!-- && $passLogin == $row["password"] -->