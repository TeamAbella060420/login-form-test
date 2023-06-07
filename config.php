<?php 

$conn = mysqli_connect('localhost', 'root', '', 'user_bg');

if (!$conn) {
  die('Database connection error: ' . mysqli_connect_error());
};

if (!$conn instanceof mysqli) {
    die('Invalid database connection object');
  };

?>
