<?php include_once 'header.php'; ?>

<form enctype="multipart/form-data" action="" method="post">
  <input type="text" name="title" id="" placeholder="title">
  <input type="text" name="address" id="" placeholder="address">
  <input type="text" name="city" id="" placeholder="city">
  <input type="text" name="postcode" id="" placeholder="postal code">
  <input type="text" name="area" id="" placeholder="area (sqm)">
  <input type="text" name="price" id="" placeholder="price">
  <input type="text" name="description" id="" placeholder="description">


  <input type="text" name="" id="" placeholder="type">
  <input type="hidden" name="MAX_FILE_SIZE" value='1255000'>
  Select the image: <input type="file" name="myFile" placeholder="Image" id="">
  <select name="type">
    <option value="letting">To Let</option>
    <option value="sale">For Sale</option>
  </select>

  <input type="submit" name="submit" value="Add property">


</form>

<?php

/*

SQL: create database real_estate

CREATE TABLE housing
	(
	    id_housing INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	    title VARCHAR(50),
	    address VARCHAR(50),
        city VARCHAR(50),
        pc INT(4),
        area INT(3),
        price INT(7),
        photo VARCHAR(50),
        type VARCHAR(10),
        description VARCHAR(1000)
  );
  */
require_once 'database.php';
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
$db_name = 'real_estate';
$db_found = mysqli_select_db($connect, $db_name);

use Sirprize\PostalCodeValidator\Validator;




if (isset($_POST['submit'])) {


  $titlePost = $_POST['title'];
  $addressPost = $_POST['address'];
  $cityPost = $_POST['city'];
  $pcPost = $_POST['postcode'];
  $areaPost = $_POST['area'];
  $pricePost = $_POST['price'];
  //$photoPost = $_POST['myFile'];
  $typePost = $_POST['type'];
  $descriptionPost = $_POST['description'];







  if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
    echo "Some error during upload";
  } else {


    $extensionArray = array(
      'jpg' => 'image/jpeg',
      'png' => 'image/png',
      'gif' => 'image/gif'
    );

    $extFile = array_search($_FILES['myFile']['type'], $extensionArray);

    if ($extFile) {

      $desinationDir = './uploads/';
      $fullPath = $desinationDir . $_FILES['myFile']['name'];


      $querry = 'SELECT id_housing FROM housing';

      $results = mysqli_query($connect, $querry);
      $db_record = mysqli_fetch_assoc($results);
      $id = $db_record['id_housing'];
      $renamed = $id . $_FILES['myFile']['name'];
      var_dump($renamed);
      $moved = move_uploaded_file($_FILES['myFile']['tmp_name'], $fullPath);
      echo 'file uploaded successfuly';
    } else {
      echo 'File not an image !';
    }
  }




  if ($db_found) {



    if (empty($_POST["title"])) {
      echo "Title is required";
    } elseif (empty($_POST["address"])) {
      echo "Address is required";
    } elseif (empty($_POST["city"])) {
      echo "City is required";
    } elseif (empty($_POST["postcode"])) {
      echo "Postal code is required";
    } elseif (empty($_POST["area"])) {
      echo "Total area is required. Only input the numbers";
    } elseif (empty($_POST["price"])) {
      echo "Price is required. Make sure you only insert numbers";
    } elseif (empty($_POST["type"])) {
      echo "Type of the property listing is required";
    } elseif (strlen($_POST["postcode"]) != 4) {
      echo "the postal code should contain 4 numbers";
    } else {


      $query = "INSERT INTO housing(id_housing, title, address, city, pc, area, price, type, description, photo) VALUES (NULL, '$titlePost','$addressPost', '$cityPost', '$pcPost', '$areaPost', '$pricePost', '$typePost', '$descriptionPost', '$fullPath')";

      $results = mysqli_query($connect, $query);

      mysqli_query($connect, $results);
      //var_dump(mysqli_query($connect, $results));
    }
  }
}




?>