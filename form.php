<?php
include('connection.php');
?>
<html>
<head>
<title>
Form
</title>
<style>
#form{
  border: 2px solid black;
  padding: 5px;
  margin: 5px;
  width: 300px; 
  height: 225px;
}
input{
  display: inline-block;
}
label{
  float: left;
  display: inline-block;
}
#reset{
  float: right;
}
#submit{
  float: left;
}
#connect{
  font-size: 20px;
}
</style>
</head>
<body>
<div id="form">
<br>
<form method="POST" action="">
<table>
<tr>
<th><label for="name">Name: </label></th>
<td><input id="name" type="text" name="name" required/></td>
</tr>
<tr>
<th><label for="user">Username: </label></th>
<td><input id="user" type="text" name="username" required/></td>
</tr>
<tr>
<th><label for="pswd">Password: </label></th>
<td><input type="password" id="pswd" name="password" required/></td>
</tr>
<tr>
<th><label for="mail">Gmail: </label></th>
<td><input type="email" id="mail" name="email" required/></td>
</tr>
<tr>
<th><label for="phone">Phone number: </label></th>
<td><input type="number" id="phone" name="phone" min="0" required/></td>
</tr>
<tr>
<th><label for="country">Country: </label></th>
<td><input type="text" id="country" name="country" required/></td>
</tr>
<tr>
<th><label for="date">Date: </label></th>
<td><input type="date" id="date" name="date" required/></td>
</tr>
<tr>
<th></th><td><input type="submit" id="submit" name="submit" value="submit"/><input type="reset" id="reset" name="reset" value="reset"/></td>
</tr>
</table>
</form>
</div>
STATUS: 
<div id="connect">Connecting...</div>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$mail=$_POST['email'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$date=$_POST['date'];
$query="INSERT INTO `database` VALUES ('','$name','$username','$password','$mail','$phone','$country','$date')";
$result=mysqli_query($con,$query);
if($result){
include("submission.php");
}else{
include("submit.php");
};
};
?>
<script>
document.getElementById('phone').addEventListener('input', function(){
if(document.getElementById("phone").value.length > 10){
alert("Phone number can only contain 10 digits")
document.getElementById("phone").value = ""
}
})
</script>
</body>
</html>