<?php
  if (isset($_POST['create'])) {
    require_once('../connection.php');
    
    // write your logic to add the product to the database here
    // you can use the $conn variable from connection.php to send queries to the database
  }


  // redirect to the search page after adding a product
  header("location: /products/search.php");
?>