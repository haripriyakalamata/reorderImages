<?php
//include database class
include_once 'db.php';
$db = new DB();

//get images id and generate ids array
$id = $_GET['id'];

//update images order
$db->delete($id);
?>
