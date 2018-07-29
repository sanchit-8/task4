<?php session_start(); //compulsory to start session to use GET and POST?> 
<?php 
$donar=$_POST['donar'];
$d_email=$_POST['d_email'];
$pass=$_POST['m_no'];
$rep=$_POST['amt'];
$p_type=$_POST['p_type'];
$status="Failed";
if($pass==$rep)
$status="Success";
echo <<<END
<title>thank you</title>
<link rel="stylesheet" type="text/css" href="main.css">
<body style="height: 100%;
            background-repeat: no-repeat;
            background: #000000";>
<div class="container">
        <CENTER><h1 class="welcome textCenter">THANK YOU</h1></CENTER>
            <div class="card card-container">
            <h2><CENTER><p>SUMMARY</P></CENTER></h2>
            <hr>
                     	
<center>NAME      : $donar<br><br></center>
<center>EMAIL     : $d_email<br><br></center>
<center>MOBILE NO.: $pass<br><br></center>
<center>AMOUNT	  : $rep<br><br></center>
<hr>
</div>
</div>
</body>
END;
//AUTHOR: SHANTANU MISHRA FOR GDG-128
?>