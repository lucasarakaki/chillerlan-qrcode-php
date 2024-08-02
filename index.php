<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chillerlan QR Code generate PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- css -->
  </head>
  <body>
    <div id="container">
      <h2>chillerlan/php-qrcode</h2>
      <p>QR Code Generator with PHP</p>
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <div>
          <input type="text" name="data" placeholder="Text, URL or other type of data">
        </div>
        <div>
          <input type="submit" value="Generate">
        </div>
      </form>
    </div>
  </body>
</html>