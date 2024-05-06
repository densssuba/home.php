<?php

$connection = mysqli_connect("localhost", "root", "", "book_db");

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $email = $password = "";

if (isset($_POST["send"])) {
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
 

  $request = "INSERT INTO login ( email, password ) 
             VALUES ( '$email', '$password', )";

  $result = mysqli_query($connection, $request);

  if ($result) {
    header("location: home.php"); // Redirect to success page
 
  }
}

mysqli_close($connection);

