<?php
require_once 'models\Modelusers.php';
if($_SERVER['REQUEST_METHOD'] === "GET"){
    
   
      
$response =     $users->selectAll("users");

echo json_encode($response);

   


}else{
    echo "no perm";
}


?>