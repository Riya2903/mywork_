<!DOCTYPE html>
<head>
  <title>mywork</title>
</head>
<body>
 
  <h1>welcome to mywork</h1>
  
  <?php the_title( '<h3>', '</h3>' ); ?>
  <?php the_content( 'Continue reading ' . get_the_title() ); ?>

<?php
echo "welcome";

?>
</body>