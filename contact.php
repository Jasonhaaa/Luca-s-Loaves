<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Fname:</em> <?php echo $_POST["fname"]?></li>
        <li><em>Lname:</em> <?php echo $_POST["lname"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>File:</em> <?php echo $_FILES["files"]["name"]?></li>
        <li><em>File:</em> <?php echo $_FILES["filex"]["name"]?></li>
    </ol>
</body>
</html>