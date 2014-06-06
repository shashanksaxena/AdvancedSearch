<?php

if(isset($_POST['completedsearch']))
{
$keyword = $_POST['query'];
include('includes/config.php');

$query = "(SELECT name,description  FROM  tab1 WHERE description LIKE '%" . 
           $keyword . "%' OR name LIKE '%" . $keyword ."%') 
           UNION
           (SELECT name,description FROM  tab2 WHERE description LIKE '%" . 
           $keyword . "%' OR name LIKE '%" . $keyword ."%') 
           UNION
           (SELECT name,description FROM tab3 WHERE description LIKE '%" . 
           $keyword . "%' OR name LIKE '%" . $keyword ."%')";
     
$qu=mysql_query($query);

}
?>
