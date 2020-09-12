<?php
 
 $conn=new mysqli("localhost","demo000","demo1","demo000");
    
 if($conn){
 }
  else{
}

    $id = $_POST['id'];
    $title = $_POST['title'];
 
    $conn->query("insert into upload (id, title) values('".$id."', '".$title."')");

?>