<?

$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "instagram";

$con = new mysqli($host, $user, $password, $dbname);


    $sql = "SELECT * FROM `posts`";
    $result = $con->query($sql);

while ($row = $result->fetch_assoc()){

}
