<?php
 
 $conn=new mysqli("localhost","user","password","dbname");
    
 if($conn){
 }
  else{
}

    $id = $_POST['id'];
    $title = $_POST['title'];
 
    $conn->query("insert into upload (id, title) values('".$id."', '".$title."')");

?>
