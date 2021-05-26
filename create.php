<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "instagram";
$con = new mysqli($host,$user,$password,$dbname);


if(!empty($_POST)){



    $username = mysqli_real_escape_string($con, $_POST['username']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $imageUrl = mysqli_real_escape_string($con, $_POST['imageUrl']);
    $profileImgUrl = mysqli_real_escape_string($con, $_POST['profileImgUrl']);

$sql = "INSERT INTO posts (username, description, imageUrl,profileImgUrl)
VALUES ('$username', '$description', '$imageUrl','$profileImgUrl')";


if ($con->connect_error) {
    die("Fejl i forbindelsen til DB: " . $con->connect_error);
  } 

if ($con->query($sql) === TRUE) {
    echo "Post er nu gemt";
  } else {
    echo "Fejl: " . $sql . "<br>" . $con->error;
  }

}else{
    echo 'Ingen post';
}
  
  $con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Create post</title>
</head>
<body>
    

    <form method="post" action="/create.php">
        <input type="text" name="username" value="" placeholder="Brugernavn" /><br />
        <textarea name="description" placehoder="Beskrivelse"></textarea><br />
        <input type="text" name="imageUrl" placeholder="Post img url" value="" /><br />
        <input type="text" name="profileImgUrl" placeholder="Porfil img url" value="" /><br />
        <input type="submit" value="Opret" />
    </form>
</body>
</html>