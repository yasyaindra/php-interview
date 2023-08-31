<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interview";

function mysql_init($servername, $username, $password, $dbname) {
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM movies ORDER BY price ASC LIMIT 3";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "id: " . $row["KODE"]. ": " . $row["name"]. " " . $row["price"]. "<br>";
        }
      } else {
        echo "0 results";
      }

    return "Connected successfully";
}

echo  mysql_init($servername, $username, $password, $dbname);