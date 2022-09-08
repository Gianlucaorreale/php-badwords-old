<?php
 $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum perferendis a quis quisquam dolor vero, eius,
  ipsa quaerat nulla iusto tenetur blanditiis nihil distinctio pariatur sunt hic consectetur aliquid aspernatur!';

 $badword = 'a';

 $censured_paragraph = str_replace($badword, '***', $paragraph);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <p><?php echo $paragraph ?></p>
   <p><em>il paragrafo è lungo <?php echo strlen($paragraph)?> caratteri</em></p> 
   <hr>
   <p><?php echo $censured_paragraph ?></p>
   <p><em>il paragrafo è lungo <?php echo strlen($censured_paragraph)?> caratteri</em></p> 
 </body>
 </html>