<?php
session_start();
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register your pet</title>
    <link rel="stylesheet" href="style1.css">
    
</head>


<body>
    

    <div class="center">
        <h1>Register your pet</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" id="petname" name="petname" required>
                <span></span>
                <label>Pet Name</label>
            </div>

            <div class="txt_field">
                <input type="text" id="breed" name="breed" required>
                <span></span>
                <label>Breed</label>
            </div>

            <div class="txt_field">
                <input type="text" id="gender" name="gender" required>
                <span></span>
                <label>Gender</label>
            </div>

            <div class="txt_field">
                <input type="date" id="birthdate" name="birthdate" required>
                <span></span>
                <label style="top: -5px">Birthdate</label>
            </div>

            <input type="submit" name="create" id="register"value="Register">
            <div class="signup_link">
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
        
			var petname 	= $('#petname').val();
			var breed	= $('#breed').val();
			var gender 		= $('#gender').val();
            var birthdate       = $('#birthdate').val();
          
				e.preventDefault();	

			 $.ajax({
                type: 'POST',
                url: 'process.php',
                data: {petname: petname, breed: breed, gender: gender, birthdate: birthdate},
                success: function(data){
                    Swal.fire({
                        'title': 'Successful',
                        'text': data,
                        'type': 'success',
                    });

                    // Redirect to index.php after a short delay (e.g., 1000 milliseconds)
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 1000);
                },
                error: function(data){
                    Swal.fire({
                        'title':'Errors',
                        'text' : 'There were errors while saving the data.',
                        'type' : 'error'
                    });
                }
            });
        } else {
            // Handle validation errors or other cases if needed
        }
    });
});
	
</script>
</body>
</html>