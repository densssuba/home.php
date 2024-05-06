<?php

$connection = mysqli_connect("localhost", "root", "", "book_db");

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $Fullname = $PhoneNumber = $Email = $Password  = "";

if (isset($_POST["send"])) {
  $Fullname = mysqli_real_escape_string($connection, $_POST['Full name']);
  $PhoneNumber = mysqli_real_escape_string($connection, $_POST['Phone Number']);
  $Email = mysqli_real_escape_string($connection, $_POST['Email']);
  $Password = mysqli_real_escape_string($connection, $_POST['Password']);
 

  $request = "INSERT INTO book_form (Full name, Phone Number, Email, Password, ) 
             VALUES ('$Full name','$Phone Number', '$Email', '$Password', )";

  $result = mysqli_query($connection, $request);

  if ($result) {
    header("location: index.html"); // Redirect to success page
  
  }
}

mysqli_close($connection);

