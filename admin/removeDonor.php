<?php
include('includes/config.php');
if($_GET['acceptid'])
{
$id=$_GET['acceptid'];
echo $id;
$sql="delete from tblblooddonars where id=$id";
$query = $dbh -> prepare($sql);
$query->execute();
 header('location:donor-list.php');
}

?>