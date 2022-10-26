<html>
  <head>
    <title>New Product</title>
    <link rel="stylesheet" href="/products/styles.css">
  </head>
  <body>
    <!-- form: a form to create a new product -->
    <h4>Fill out the product's details and create a new one</h4>
    <form action="/products/create.php" method="post">
      <!-- add the required inputs here -->
    <label>Name <input type="text" placeholder="Seagate1TB" name="name"></label><br>
    <label>Price <input type="number" placeholder="1000" name="price" step="0.5"></label><br>
    <label>Description <input type="text" placeholder="details" name="description"></label><br>
    <label>Quantity <input type="number" placeholder="1" name="quantity"></label><br>
  <label>SKU <input type="text" placeholder="UGGBBPUR06" name="sku"></label><br>
      <!-- submit button -->
      <input type="submit" name="create" value="create">
    </form>
    <!-- button to return to index.php -->
    <a href='/index.php'><button>Back to Home</button></a>
  </body>
</html>