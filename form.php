<?php
$host  = 'localhost';
$username = 'root';
$password = '';
$dbName = 'infidel';
$db = mysqli_connect($host, $username, $password, $dbName);
session_start();
// if(!$db){
//     echo 'not connected';
// }else{
//     echo 'connected';
// }

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $query = "INSERT INTO user(email) VALUE('$email')";
    $infidel = mysqli_query($db,$query);

    if($infidel){

      $_SESSION['success'] = 'Successful';
    //   header('location: admin/index.php');
      header('location: success.php');
    
    }

}
?>

<?php
$host  = 'localhost';
$username = 'root';
$password = '';
$dbName = 'infidel';
$db = mysqli_connect($host, $username, $password, $dbName);
// session_start();
// if(!$db){
//     echo 'not connected';
// }else{
//     echo 'connected';
// }

if(isset($_POST['start'])){
    $email=$_POST['email'];
    $query = "INSERT INTO user(email) VALUE('$email')";
    $infidel = mysqli_query($db,$query);

    if($infidel){

      $_SESSION['success'] = 'Successful';
    //   header('location: admin/index.php');
      header('location: success.php');
    
    }

}
?>