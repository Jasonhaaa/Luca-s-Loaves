<?php
$servername = "localhost";
$username = "root";
$password = "gongyiyang123";
$dbname = "myDB";
 
// 创建链接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检查链接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 

$sql = "INSERT INTO users(username, password)
VALUES ('gong', '12345');";
$sql = "INSERT INTO users(username, password)
VALUES ('gongw', '123456');";

 
if ($conn->multi_query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>