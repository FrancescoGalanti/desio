<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>



    <?php
     /* variable text */
     $txt = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos libero enim debitis rem distinctio. Veniam libero nam aperiam sit possimus, et eligendi eius placeat amet, soluta labore beatae, architecto accusantium!";
    
     ?>
      <!-- printing variable in html -->
     <p>Benvenuto <?=$txt?></p>

     <?php
      /* Printing the text.lenght */
      echo strlen($txt);
      ?>

     


</body>
</html>