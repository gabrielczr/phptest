<?php
include_once 'header.php';
require_once 'database.php';
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_name = 'real_estate';
$db_found = mysqli_select_db($connect, $db_name);




$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;



if ($id > 0 && $db_found) {





  $querry = 'SELECT * FROM housing WHERE id_housing = ' . $id;

  $results = mysqli_query($connect, $querry);


  $db_record = mysqli_fetch_assoc($results);


  echo '<hr>';

  echo '<section style ="display:flex; margin:1rem">';
  echo '<div>' . "<img src=" . $db_record['photo'] . " alt=\"\" width=100px/>";
  echo '</div>';
  echo '<div style ="margin-left:1rem">' . '<h2>' . 'Title:' . ' ' . $db_record['title'] . '</h2>' . '<br>';
  echo '<p>' . 'Type of listing:' . ' ' . $db_record['type'] . '<br>';
  echo 'Price of listing:' . ' ' . $db_record['price'] . ', ' . 'Total Area: ' . ' ' . $db_record['area'] . ' ' . 'sqaure meters' . '<br>';
  echo 'City:' . ' ' . $db_record['city'] . ', ' . 'Postal code:' . ' ' . $db_record['pc'] . '<br>';
  echo 'Address:' . ' ' . $db_record['address'] . '<br>';
  echo 'Description:' . ' ' . $db_record['description'] . '<br>';
  $idm = $db_record['id_housing'];
  echo "<a href=listing.php?id=$idm>Click here for more information</a>";
  echo '</p>';
  echo '</div>';
  echo '</section>';
  echo '<br>';
}





mysqli_close($connect);


echo "<br>";
