<?php
 
// membaca username dari form login
$username = $_POST['username'];
// membaca password dari form login
$password = $_POST['password'];
$api_key = $_POST['api_key'];
//  var_dump($_POST);
// membuat URL GET request ke sistem A
$url = "http://localhost/tws/api/service.php?username=".$username."&password=".$password."&api_key=".$api_key; 
 
// mengirim GET request ke sistem A dan membaca respon XML dari sistem A
$bacaxml = simplexml_load_file($url);

 var_dump($bacaxml);
// membaca data XML hasil dari respon sistem A
// foreach($bacaxml->response as $respon)
// {
// jika responnya TRUE maka login sukses
// jika FALSE maka login gagal
// echo $respon;
// if ($respon == "TRUE") echo "Login Sukses";
// else if ($respon == "FALSE") echo "Login Gagal";
// }  
 
?>