<?php
require_once 'config/config.php';
?>

<?php // abrimos php

echo phpinfo();

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title> <?php echo TITLE_BUSINESS; ?> </title>
</head>
<body>

       <?php //abrimos php
       //echo phpinfo();
       $nombre = "Juan";
       $edad = 16;
       //cerrmos php?>

       <P> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis maiores perferendis recusandae tempora? Tempore eligendi ipsa ut. Libero id magni repellat illum placeat voluptates omnis velit corporis sunt numquam quos eveniet quasi nobis recusandae modi reiciendis perspiciatis minus iure tenetur, earum fugit itaque et? Dolorum velit tenetur voluptas ipsum quo?</P>
       
       <a href="http://google.com"> <?php echo $nombre." ". $edad ?></a>
       
</body>
</html>

?>