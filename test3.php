<html>
<head>
<meta charset="utf-8">
<title>111</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
 <?php
$emailErr = "";
$email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")

 if (empty($_POST["email"])) {
    $emailErr = "邮箱是必需的。";
  } else {
    $email= test_input($_POST["email"]);
  }
if (intval($_POST["website"])) {
       $website=test_input($_POST["website"]);
  } else {
       $websiteErr = "必须输入数字。";
  }
if (intval($_POST["name"])) {
    $name= test_input($_POST["name"]);
  } else {
    $nameErr = "必须输入数字。";
  }
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

名字: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error"> <?php echo $emailErr;?></span>
   <br><br>
数字:<input type="text" name="website">
   <span class="error"> <?php echo $websiteErr;?></span>
   <br><br>
数字:<input type="text" name="name" value="<?php echo $name;?>">
   <span class="error"> <?php echo $nameErr;?></span>
   <br><br>
<input type="submit" name="submit" value="Submit">
</form>
 <?php
$xx=intval($_POST["website"])+intval($_POST["name"]);
echo "<h2>您输入的内容是:</h2>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $name;
echo "<br>";
echo $xx;
echo "<br>";
?>
</body>
</html>