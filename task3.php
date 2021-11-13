<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  
  
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" name="name"  id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email"   class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
    <input type="password"   class="form-control" name="password"  id="exampleInputPassword1" placeholder="Password">
  </div>


  <div class="form-group">
    <label for="exampleInputName">Address</label>
    <input type="text" class="form-control" name="address"  id="exampleInputAddress" aria-describedby="" placeholder="Enter Address">
  </div>



  <div class="form-group">
    <label for="exampleInputName">Linkedin URL</label>
    <input type="text" class="form-control" name="linkedin"  id="exampleInputLinkedin" aria-describedby="" placeholder="Enter Linkedin URL">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>

<?php

    if ($_SERVER['REQUEST_METHOD']=="POST") {
        
        //$name      = $_REQUEST['name'];
       // $email     = $_POST['email'];
       // $password  = $_POST['password'];
      //  $address   = $_POST['address'];
      //  $linkedin  = $_POST['linkedin'];

//-------------------------Name-----------------------------------------------
   if (empty( $_REQUEST['name'])) {

            echo" <span style='color:red'>Name  is not valid ...!</span>"."<br>"; 
        } 
        else {
           echo"name : ". $_REQUEST['name']."<br>";
        }

//---------------------Email----------------------------------------------

  if (empty($_POST['email'])) {

      if(!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL))
      {
        echo" <span style='color:red'>Email  is not valid ...!</span>"."<br>"; 
      }
 
    } 
    else
    {
       echo"E-mail : ". $_POST['email']."<br>";
    }

//-----------------------Password-----------------------------------------
  if (empty($_POST['password']) && strlen($_POST['password'])<8) {
      
    echo" <span style='color:red'>Password  is not valid( > 8 chars) ...!</span>"."<br>"; 

    }

  else {
    echo"Password : ".$_POST['password']."<br>";
  }

  //------------------Address---------------------------------------
  
  if (!empty( $_POST['address'])) {

      if ( strlen( $_POST['address']) !==10) {
          
        echo" <span style='color:red'>Address  is not valid ( Should have 10 characters ) ...!</span>"."<br>"; 
   
      }
    

  }
  else {
    echo"Address : ".$_POST['address']."<br>";
  }

  //---------------------linked in URL---------------------------------------
  if (empty($_POST['linkedin']) || !filter_var($_POST['linkedin'],FILTER_VALIDATE_URL)) {

    echo" <span style='color:red'> linked in  is not valid ...!</span>"."<br>";
  }
  else {
    echo"linkedin URL : ".$_POST['linkedin']."<br>";
  }
 
  //-------------------------------------------------------

    }


?>







































<?php
   $errors=[];

   if (empty($name)) {
       
       $errors['Name']="Require  Name <br>";
   }
   if (empty($email)) {
       
       $errors['Email']="Require  Email <br>";
   }else {
       
   }
   if (empty($password)) {
       
       $errors['Password']="Require  Password <br>";
   }
   
   if (empty($address)) {
       
       $errors['Address']="Require  Address <br>";
   }
   if (empty($linkedin)) {

       $errors['Linkedin']="Require  Email <br>";
   }?>