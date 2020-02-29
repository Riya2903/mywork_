<!DOCTYPE html>
<head>
  <title>mywork</title>
</head>
<body>
  <a style ="color:blue;
 " href="http://www.mywork.com/wordpress/">home</a>
  <a href="http://www.mywork.com/wordpress/about/">about</a>
  <a style ="color:blue; "href="http://www.mywork.com/wordpress/contact/">contact</a>
  <a style ="color:blue; "href="http://www.mywork.com/wordpress/gallery/">gallery</a>
  <h1>welcome to mywork</h1>
  
  <?php echo get_the_title(); ?>
  <?php
while ( have_posts() ) {
  the_post();
  the_content();
}
?>

</body>