<?php     
    session_start(); //default
    if (isset($_GET['logout'])) //when logout clicked it is done
    {
        session_destroy(); 
        unset($_SESSION['name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" class="js csstransitions">
<head>
<title>Students Database</title><meta charset="utf-8">

</head>
<body>
<div id="pagewrapper">
<div id="topbg"></div>
<div id="systemName">
<h1>Bus Booking</h1>
</div>
<div id="header">
<div id="mainmenu">
<header>
<ul>

<?php if (!isset($_SESSION['name']))
{?>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
<?php }?>
<?php if (isset($_SESSION['name']))
{?>
<li><a href="index.php">Home</a></li>
<li><a href="mark_enter.php">Mark Enter</a></li>
<li><a href="view_mark_enter.php">View Mark</a></li>
<li> <a href="index.php?logout='1'">Logout</a> </li>
<?php }?>
</ul>
</header>
</div>
</div>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) {?>
<div class="error success" >
<h3 style="color: green;">
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3></div>
<?php } ?>
</div>
<div id="content">
<h1>Welcome <?php
if (isset($_SESSION['name']))
{ echo
$_SESSION['name'];
}
?>
</h1>

</div>
</body>
</html>