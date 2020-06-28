
<div class="container">
    <div class="row">
    <div class="col-sm-6">
        
        <div class="contact-us">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" value="<?php echo $user['name'] ?>"
                                   class="form-control <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?php echo  $errors['name'] ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>password</label>

                            <input  class="form-control" type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            <div class="invalid-feedback">
                                <?php echo  $errors['password'] ?>
                            </div>
                        </div>

                            <label>Email</label>
                            <input name="email" value="<?php echo $user['email'] ?>"
                                   class="form-control  <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?php echo  $errors['email'] ?>
                            </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" value="<?php echo $user['phone'] ?>"
                                   class="form-control  <?php echo $errors['phone'] ? 'is-invalid' : '' ?>">
                            <div class="invalid-feedback">
                                <?php echo  $errors['phone'] ?>
                            </div>
                        </div>



                        <button type="submit" value="submit" class="btn btn-info btn-md">Register</button>
                        <br>
                        <br>
                        <label><b>Already registered?</b></label>
                           <button class="btn btn-info btn-md"> <a href="index.php" style="color:white;">Click Here</a></button>
                
                 </form>
        </div>
        </div>

        <div class="col-sm-6" >
         <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
        </div>
	</div>			
 </div>               
<script>
            var myInput = document.getElementById("password");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            myInput.onfocus = function() {
              document.getElementById("message").style.display = "block";
            }

          
            myInput.onblur = function() {
              document.getElementById("message").style.display = "none";
            }

           
            myInput.onkeyup = function() {
              
              var lowerCaseLetters = /[a-z]/g;
              if(myInput.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
              } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
              }

              
              var upperCaseLetters = /[A-Z]/g;
              if(myInput.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
              } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
              }

              
              var numbers = /[0-9]/g;
              if(myInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
              } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
              }

              
              if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
              } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
              }
            }
</script>
           
    
