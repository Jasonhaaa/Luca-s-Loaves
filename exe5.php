<html>
<head>
<meta charset="utf-8">
<title>111</title>
<style type="text/css">

.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #ebab3a;border-collapse: collapse;table-layout: fixed;}

.tftable th {font-size:12px;background-color:#e6983b;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;text-align:left;}

.tftable tr {background-color:#ffffff;}

.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #ebab3a;}

.tftable tr:hover {background-color:#ffff99;}

.cut_str{
                width: 200px;

                overflow: hidden;

                text-overflow: ellipsis;

                -o-text-overflow: ellipsis;

                -webkit-text-overflow: ellipsis;

                -moz-text-overflow: ellipsis;

              white-space: nowrap;

}
</style>
</head>
<body>
<h1 align="center">214</h1>
<table class="tftable" border="1">
<tr>
<th>ID</th>
<th>Fname</th>
<th class="cut_str">Lname</th>
<th>Englishname</th>
<th>email</th>
<?php
$servername = "localhost";
$username = "root";
$password = "gongyiyang123";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname,englishname,email FROM MyGuest";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<tr>
              <td><a href='exe53.php? id=$row[id]'>".$row["id"]."</a></td>
              <td>".$row["firstname"]."</td>
              <td class='cut_str' id='cut_str'>".$row["lastname"]."</td>
              <td class='cut_str' id='cut_str'>".$row["englishname"]."</td>
              <td class='cut_str' id='cut_str'>".$row["email"]."</td>
               </tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</table>
<form action="exe51.php" method="post">
Enter ID to delete the record ：<input type="text" name="xbox"><br>
<input type="submit"><br>
</form>
<form action="exe52.php" method="post">
<p style="font-size:20px">Add new record</p>
Fname<input type="text" name="a"><br>
Lname<input type="text" name="b"><br>
Englishname<input type="text" name="c"><br>
Email  <input type="text" name="d"><br>
<input type="submit">
</form>
</body>
</html>