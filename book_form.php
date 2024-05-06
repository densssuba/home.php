<?php

$connection = mysqli_connect("localhost", "root", "", "book_db");

// Check connection 
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $email = $phone = $address = $location = $guests = $arrivals = $leaving = "";

if (isset($_POST["send"])) {
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $room = mysqli_real_escape_string($connection, $_POST['room']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  $address = mysqli_real_escape_string($connection, $_POST['address']);
  $location = mysqli_real_escape_string($connection, $_POST['location']);
  $guests = mysqli_real_escape_string($connection, $_POST['guests']);
  $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
  $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

  $request = "INSERT INTO book_form (name, room, email, phone, address, location, guests, arrivals, leaving) 
             VALUES ('$name','$room', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

  $result = mysqli_query($connection, $request);

  if ($result) {
    header("location: home.php"); // Redirect to success page
  } else {
    echo "Something went wrong";
  }
}

mysqli_close($connection);

