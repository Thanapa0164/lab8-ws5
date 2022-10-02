<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<div style="display: flex;">
<div><img src='member_photo/<?=$row["username"]?>.jpg' width='100'></div>
<div style="padding: 30px;">
ชื่อสมาชิก: <?=$row ["name"]?><br>
ที่อยู่: <?=$row ["address"]?><br>
อีเมล: <?=$row ["email"]?><br>
</div>
</body>
</html>