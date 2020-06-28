<?php

include 'partials/header.php';
?>
<style>
            body{background-image: url(images/u.jpg) !important;
            background-repeat: no-repeat;
            background-size: cover;}

         .data{
          background: #f8f4e5;
          padding: 50px 100px;
             margin-left: 100px;
             margin-right: 100px;
             margin-top: 50px;
          border: 2px solid black;
          box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px black;
        }

</style>

    <div class="container" >

                <nav class="navbar navbar-expand-lg" style="background-color:#ffa580">
              <b><a class="navbar-brand" href="welcome.php" style="color:white">Welcome</a></b>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a style="color:black" class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                  </li>



                  <li class="nav-item">
                    <a  style="color:black" class="nav-link" href="index.php">Logout</a>
                  </li>

                    </ul></div></nav>





    </div>

<?php session_start(); ?>


<div class="container">
    <div class="data">
    <div class="card">
        <div class="card-header">
            <h3>User: <b><?php echo $_SESSION['name'] ?></b></h3>
        </div>
       
          
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Name:</th>
                <td><?php echo $_SESSION['name'] ?></td>
            </tr>
            
            <tr>
                <th>Email:</th>
                <td><?php echo $_SESSION['email'] ?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><?php echo $_SESSION['phone'] ?></td>
            </tr>
            
            </tbody>
        </table>
    </div>

</div>
<?php include 'partials/footer.php' ?>

