
<?php
/*
$db_name= "b17_20029122_messages";
$username="b4_20029918";
$password="tpc1qsrw";
$server_name="sql312.byethost4.com";
   

$conn=mysqli_connect($server_name,$username,
	$password,$db_name)or die('Could not connect: ' . mysqli_connect_error());
;

 

  
 $message=$_POST["message"];
 $from=$_POST["from"];
 $name=$_POST["name"];
 
 
$query="insert INTO message VALUES ('$message','$from','$name')";
$result=mysqli_query($conn,$query);
 if(! $result )
{
  echo "failure";
}
	 
$url="http://muhtasim.byethost4.com/#contact";
	
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
*/

 
	header('Location:index.php?message=sent#contact');
 
   

?>
