<?php
// koneksi ke database di sistem A
$conn = mysqli_connect("localhost", "root", "", "tws");
// var_dump($conn);
// mysqli_select_db("dbname");

// membaca username dari GET request
$user = $_GET['username'];
// membaca password dari GET request
$pass = $_GET['password'];

$api_key = $_GET['api_key'];
// membaca data password user berdasar usernamenya
if ($api_key == "1234") {
    # code...
    $query = "SELECT * FROM user WHERE username = '$user'";
    $hasil = mysqli_query($conn, $query);
    $data  = mysqli_fetch_array($hasil);
    $password = $data['password'];
    
    // mencocokkan password user dari db dan dari GET request
    // jika cocok, maka responnya TRUE, jika tidak cocok responnya FALSE   
    if ($pass == $password) {
        $response = "Login Berhasil";
    } else {
        $response = "Login Gagal";

    }
}
else {
    $response = "Invalid API Key";
}



// membuat header dokumen XML
header('Content-Type: text/xml');
 echo "<?xml version='1.0'?>";


echo "<data>";
echo "<response>" . $response . "</response>";
echo "</data>";

?>
