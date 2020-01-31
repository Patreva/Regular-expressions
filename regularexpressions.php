<?php
$NameError="";
$EmailError="";
$WebsiteError="";

if(isset($_POST['submit_message'])){
	if(empty($_POST["Name"])){
		$NameError="Name is Required";
	}else{
	$Name=Test_User_Input($_POST["Name"]);
	//Exampe of implementing regular expressions in our code eg name
if(!preg_match("/^[A-Za-z\. ]*$/",$Name)){
    $NameError="Only Letters and white spaces are allowed.";
}
	}
	if(empty($_POST["Email"])){
		$EmailError="Email is Required";
	}else{
		$Email=Test_User_Input($_POST["Email"]);
			//Exampe of implementing regular expressions in our code eg email
if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{3,}/",$Email)){
    $EmailError="Invalid email address format.";
}
	}
	if(empty($_POST["Website"])){
		$WebsiteError="Website is Required";
	}else{
		$Website=Test_User_Input($_POST["Website"]);
					//Exampe of implementing regular expressions in our code eg website
if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)){
    $WebsiteError="Invalid Website address format.";
}
	}
}
if(!empty($_POST["Name"])&&!empty($_POST["Email"])&&!empty($_POST["Website"])){
	if((preg_match("/^[A-Za-z\. ]*$/",$Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{3,}/",$Email)==true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)==true)){
echo "<h2>Your entered information.<h2> <br>";
echo "Name:".ucwords ($_POST["Name"])."<br>";
echo "Email: {$_POST["Email"]}<br>";
echo "Website: {$_POST["Website"]}<br>";
}else{

	echo '<span class="Error">Fill in and correct all your details</span>';
}
}
function Test_User_Input($Data){
	return $Data;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Regular Expressions form</title>
</head>
<style>
input[type="text"],input[type="email"]{
border: 1px solid_dashed;
background-color: rgb(221,216,212);
width: 600px;
padding: .5em;
font-size: 1.0em;

}
.Error{
	color: red;
}
</style>
<body>
	<h1>Form validation with PHP.</h1>
 <form action="regularexpressions.php" method="post">
 	<legend>Please fill out the following fields.</legend>
<fieldset>
                <input type="text" name="Name" class="form-control"  placeholder="Your Name">*<span class="Error"><?php echo $NameError; ?> </span><br>

                <input type="email" name="Email" class="form-control" id="email" placeholder="Email Address">*<span class="Error"><?php echo $EmailError; ?></span><br>

                <input type="text" name="Website" class="form-control" id="website" placeholder="Website.">*<span class="Error"><?php echo $WebsiteError; ?></span><br>
 
                <button type="Submit" class="btn btn-primary form-control" name="submit_message">Submit</button>
</fieldset>
</form>

</body>

</html>