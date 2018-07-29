<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
    <style>
        body {
            height: 100%;
            background-repeat: no-repeat;
            background: #000000
        }

    </style>
</head>
<body>
	<div class="container">
        <CENTER><h1 class="welcome textCenter">WELCOME</h1></CENTER>
            <div class="card card-container">
                <CENTER><h2>DONATE</h2></CENTER>
                <hr>
                <form action="summary.php" target="_blank" method="POST">
                	<p class="input_title">Name :</p>
                    <input type="text" name="donar" id="inputName" class="login_box" placeholder="Name"  autofocus style="margin-bottom: 0px;">

                    <p class="input_title">Email :</p>
                    <input type="email" name="d_email" id="inputEmail" class="login_box" placeholder="abc@mail.com" style="margin-bottom: 0px;" >

                    <p class="input_title">Mobile No. :</p>
                    <input type="tel" name="m_no" id="inputMobile" class="login_box" placeholder="10 Digit Mobile Number" style="margin-bottom: 0px;">

                    <p class="input_title">Amount :</p>
                  	<input type="number" name="amt" id="inputamount" class="login_box" name="num1" placeholder="0.0" required="" style="margin-bottom: 0px;">

                    <p class="input_title">Payment Type :</p>
                    <input type="radio" name="p_type" value="Credit Card">Credit Card
					<input type="radio" name="p_type" value="Debit Card">Debit Card
					<input type="radio" name="p_type" value="Pay Pal" style="margin-bottom: 40px;">Pay Pal

                    <button type="submit" id="signup_btn" class="btn btn-signin">Confirm</button>
                </form>    
            </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>