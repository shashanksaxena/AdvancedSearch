<?php 
error_reporting(0);
include('includes/config.php');

include('functiondata.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

 <ul id="insert_search" >

<?php if($qu)
{
 
while($row = mysql_fetch_array($qu))
{
?>
<li class="backgound">
<h6><?php echo $row['name']; ?></h6>
<article>
<h5><?php echo strip_tags($row['description']); ?></h5>
</article></li>
<?php
}

 }

?>
  </ul>

  <?php include "include/footer.php" ?>
</footer>
<section class="left"> </section>
</body>
</html>
