<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';

$users = getUsers();

$errors = [
    'name' => "",
    'password' => "",
    'email' => "",
    'phone' => "",
    
];
$user = [
    'id' => '',
    'name' => '',
    'password' => "",
    'email' => '',
    'phone' => '',
    
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     if(isset($_POST["submit"])){

    $isValid = validateUser($user, $errors);
         foreach ($users as $user){
         
         if($user['email']==$_POST["email"]&&$user['password']==$_POST["password"])
         {
              session_start();
        
            $_SESSION['phone']=$user['phone'];
            $_SESSION['email']=$user['email'];
            $_SESSION['name']=$user['name'];

        header("Location: welcome.php");
         }
        
         
         }
        
         echo '<script>alert("Invalid ID and Password")</script>'; 
     
     } 
       }

?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
<link rel="manifest" href="manifest.json">
    <script>
        if('serviceWorker' in navigator) {
          navigator.serviceWorker.register('sw.js');
        };
      </script>
<style>
    body{background-image: url(images/bg.jpg) !important;}
</style>
<link rel="stylesheet" type="text/css" href="style-login.css">
<div class="container">
    <div class="card">
        
            <div class="contact-us">
  <form method="POST" enctype="multipart/form-data"
                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
      <input name="email" placeholder="Email" type="email" />
      <input placeholder="Password" type="password" name="password" required="" type="text" />
      
      <button type="submit" name="submit">Login</button>
      <label><b>New User?</b></label>
                   <button class="btn btn-info btn-md"> <a href="create.php" style="color:white;">Click Here</a></button>
  </form>
</div>
                
                
               
                

         

</div>
          
    </div>




