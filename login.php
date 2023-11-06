<!DOCTYPE HTML>
<html>
<head>
<style>
form{
width: 40%;
margin: auto;
margin-top: 30vh;
box-shadow:10px 10px 10px 10px rgb(169,160,160);
padding: 10px;}
body{
background-color: antiquewhite;
}
.input
{
width: 50%;
float: right;
margin-right: 6%;
}
p{
margin-left: 6%;
}
.submit
{
margin-left: 7%;
}
</style>
</head>
<body>



<form action="verify.php" method="post">
<h4>
<p>Name: <input class="input" type="text" name="fname"></p>
<p>Email: <input class="input" type="text" name="femail"></p>
<p>Password: <input class="input" type="text" name="pwd1"></p>
<input class="submit" type="submit"></h4>
</form>


</body>
</html>