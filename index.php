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

      <?php
        /* creation variable bad words */
    
        $badword = $_GET['word'];
      ?>
      <?php
      echo str_replace($badword,"*
      ", $txt );
      ?>
       <!-- link to new page to estrapole the value in the endpoint query word -->
      <a href="./index-second.php?word=badword">see the text</a>



     


</body>
</html>