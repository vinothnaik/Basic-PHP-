<?php
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="contactform";

	$db_conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);
	
//	mysqli_select_db("message");
	
	if($db_conn->connect_error)
	{
		echo "error";
	}
	else{
		
//	echo "connection created successfully";
		
	}
	$name=$_POST['name'];
//	echo $name;
	$email=$_POST['email'];
//echo $email;
	$contact=$_POST['phone'];
//echo $contact;
	$mess=$_POST['messagee'];
//echo $mess;


$sql = "INSERT INTO contact (name,phone,email,message) VALUES ('$name','$contact','$email','$mess')";

if (mysqli_query($db_conn, $sql)) {
    echo "message saved !";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db_conn);
}




$db_conn->close();

?>
