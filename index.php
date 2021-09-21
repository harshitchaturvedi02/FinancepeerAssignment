<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	 if(array_key_exists('import', $_POST)) {
            fun();
        }
	 function fun(){
$con = mysqli_connect('localhost','root','','login_sample_db');
$filename = "data.json";
$data = file_get_contents($filename);
$array = json_decode($data,true);

foreach($array as $value){
	
	//$query = "INSERT INTO 'jsondata' ('userId','id','title','body')
			//VALUES ('".$value['userId']."','".$value['id']."','".$value['title']."','".$value['body']."')";
			//mysqli_query($con,$query);
			 echo 'USERID : ';echo ($value['userId']);echo "</br>";
			 echo 'ID : ';echo ($value['id']);echo "</br>";
			 echo 'TITLE : ';echo ($value['title']);echo "</br>";
			 echo 'BODY : ';echo ($value['body']);
			 echo "</br>";echo "</br>";echo "</br>";
    }
   
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
 <form action='' method='post' enctype='multipart/form-data'>
 <div class="wrap">
<input type='file' name='upload' value='Upload' id='upload' />
</div>
<div class="wrap">
<input class='button-secondary' type='submit' name='import' value='Import' id='import'  />
</div>
</form>


	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>