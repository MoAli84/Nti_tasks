<?php
function  Clean($input){
      
    $value = trim($input);
    $value = htmlspecialchars($value);
    $value = stripcslashes($value);
    return $value;  
  
} 
?>