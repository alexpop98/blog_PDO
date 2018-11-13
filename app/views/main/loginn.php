<?php
session_start();
include "../../pdo/connessione.php";
$uname=$_POST['username'];
$pass=$_POST['pass'];


$passhash="SELECT password FROM signup where username='" .$uname."'";
$result=$conn->query($passhash);
while($row = $result->fetch_array(MYSQLI_NUM)){
    $passh= $row[0];}

if(password_verify($pass, $passh)==true){
  echo "password giusta cazzo";
}else{
  echo  "sei un coglione";
}


/*if(!$row=$result->fetch_assoc()){
echo $row->[0];
}

//password_verify($pass, $hashed_password)
$sql="SELECT * FROM signup WHERE username='" . $uname . "' AND password='" . $pass"'";

$result=$conn->query($sql);

if(!$row=$result->fetch_assoc()){

header("Location:error.php");

}

else {

$_SESSION['name']=$_POST['uname'];

  header("Location:home.php");
}*/




 ?>
