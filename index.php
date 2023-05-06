<!DOCTYPE html>

<!-- ICS20-Programming-Unit5-01-PHP-NumberDisplay -->
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="List of Numbers Generator, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <!-- Style Sheet and Google's MDL -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css"> 
      
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Displaying Controlled Lists of Numbers, Using PHP</title>
  </head>
  <body>
    <!-- Header -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Displaying Numbers from Min to Max</span>
        </div> 
      </header>
      <main class="mdl-layout__content">
        <!-- php echo to print the html to the page -->
    <?php
      echo "<h1>Number List Generator</h1>";
      echo "<h3>This program gives a list of integers ordered from least to greatest, given the minimum and maximum integers for the list.</h3>";
    ?>
    <center>
    <img src="./images/rand_numbers.jpeg" alt="Random Numbers Image" width="25%" height="25%"><br><br>
      
    <!-- Form for the user's age and day of the week -->
      <br><br>
    <form action="./results.php" method="post" target="results">
      <label for="lblMin">Minimum Number:</label>
      <input type="number" id="min" step="1" placeholder="Eg. -5" name="min"><br><br>
      <label for="lblMax">Maximum Number:</label>
      <input type="number" id="max" step="1" placeholder="Eg. 7" name="max">
      <br><br>
      <input type="submit" value="Submit">
    </form>
      
    <!-- iframe to display discounts based on age to user and day -->
      <br>
    <iframe id="results" name="results"></iframe>
    </center>
      </main>
  </body>
</html>