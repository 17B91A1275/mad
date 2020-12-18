<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<?php
 if(isset($_REQUEST['logout']))
 {
	 session_destroy();
?>
<script>
alert('YOU ARE NOW LOGGED OUT');
</script>
<?php
unset($_SESSION['phone']);
}
?> 
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="submit_register.php" onSubmit='return validate();'>
					       <div class="input-group">
                             <div class="rs-select2 js-select-simple select--no-search">
							    <label class="label">Name</label>
                               <input class="input--style-4" type="text" name="name" id="name">
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						   <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
							    <label class="label">Phone Number</label>
                               <input class="input--style-4" type="text" name="phone" id="phone">
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="password" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" name="gender" id="male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female" id="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
							    <label class="label">Address</label>
                               <input class="input--style-4" type="text" name="address" id="address">
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<!-- This templates was made by Colorlib (https://colorlib.com) -->
<script>
function validate()
{
  var name=document.getElementById("name").value;
  var phone=document.getElementById("phone").value;
  var password=document.getElementById("password").value;
  var male=document.getElementById("male").value;
  var female=document.getElementById("female").value;
  var address=document.getElementById("address").value;
  if(name=="")
   {
	  alert('Please select name');
	   return false;
   }
   if(phone=="")
   {
	   alert('Please select phone number');
	   return false;
   }  
      if(password=="")
   {
	   alert('Please give password');
	   return false;
   }   
   if(male.checked==false && female.checked==false)
   {
	  alert('Please select gender');
	   return false;
   }
  if(address=="")
   {
	   alert('Please select address');
	   return false;
   }
   return true;
}
</script>
</body>
</html>
<!-- end document-->