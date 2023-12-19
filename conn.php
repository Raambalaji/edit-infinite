<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'urteqid_tarang');
  define('DB_PASSWORD', 'Tarang_@4545');
  define('DB_NAME', 'urteqid_editinfinite');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if ($conn === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>