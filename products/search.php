<html>
  <head>
    <title>Search for a Product</title>
  </head>
  <body>

    <!-- form: type the name to see full details on a product-->
    <h4>Enter a word to see the full details of products that contain that word</h4>
    <form action="/products/search.php" method="get">
      <!-- input for product's name -->
      <input type="text" name="name" placeholder="e.g Western2TB"> 
      
      <!-- submit button -->
      <input type="submit" name="search" value="search">
    </form>

    <?php
      if (isset($_GET['search'])) {
        require_once('../connection.php');
        
        // write your search logic here
        // you can use the $conn variable from connection.php to send queries to the database
      }
    ?>
  
    <!-- button to return to index.php -->
    <a href='/index.php'><button>Back to Home</button></a>
  </body>
</html>