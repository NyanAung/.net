<?php 
require 'auth.php';

$id = strip_tags($_GET['id']);

$sql = " DELETE FROM contact WHERE id = '$id'";

mysqli_query($conn,$sql);

header('location: contact.php');

?>